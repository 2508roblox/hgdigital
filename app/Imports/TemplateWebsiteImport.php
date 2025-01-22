<?php

namespace App\Imports;

use App\Models\TemplateCategory;
use App\Models\TemplateWebsite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Http;

class TemplateWebsiteImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Tải xuống và lưu ảnh thumbnail
        $thumbnailPath = $this->downloadAndStoreImage($row['thumbnail']);
        
        // Tải xuống và lưu ảnh image
        $imagePath = $this->downloadAndStoreImage($row['image']);
        
        // Xác định slug
        $slug = $row['slug'] ?? Str::slug($row['name']);
        
        // Kiểm tra xem slug đã tồn tại hay chưa, nếu có thì thêm số vào cuối
        if ($slug) {
            $slug = $this->generateUniqueSlug($slug);
        }

        // Lấy tên danh mục và kiểm tra trong cơ sở dữ liệu
        $categoryName = $row['category_name'] ?? null;
        $categoryId = 1;

        if ($categoryName) {
            // Kiểm tra xem danh mục đã tồn tại chưa
            $category = TemplateCategory::where('name', $categoryName)->first();

            if ($category) {
                // Nếu đã tồn tại, lấy id
                $categoryId = $category->id;
            } else {
                // Nếu không, tạo danh mục mới
                $category = TemplateCategory::create([
                    'name' => $categoryName,
                    'slug' => Str::slug($categoryName), // Tạo slug từ tên danh mục
                    'image' => null // Nếu không có hình ảnh, có thể để null hoặc thêm giá trị mặc định
                ]);
                $categoryId = $category->id; // Lưu id của danh mục mới
            }
        }
    
        return new TemplateWebsite([
            'name' => $row['name'] ?? null,
            'slug' => $slug,
            'thumbnail' => $thumbnailPath,
            'image' => $imagePath,
            'purchases' => $row['purchases'] ?? 0,
            'original_price' => $row['original_price'] ?? 0,
            'discounted_price' => $row['discounted_price'] ?? 0,
            'demo_link' => $row['demo_link'] ?? null,
            'description' => $row['description'] ?? null,
            'category_id' => $categoryId, // Gán id danh mục vào đây
        ]);
    }
    
    
    /**
     * Generate a unique slug by appending a number if needed.
     *
     * @param string $slug
     * @return string
     */
    private function generateUniqueSlug(string $slug): string
    {
        $originalSlug = $slug;
        $count = 1;
    
        while (TemplateWebsite::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }
    
        return $slug;
    }
    

    /**
    * Download and store the image, return the new path.
    *
    * @param string|null $url
    * @return string|null
    */
    private function downloadAndStoreImage(?string $url): ?string
    {
        if (!$url) {
            return null;
        }
    
        try {
            // Tải xuống ảnh từ URL
            $imageData = file_get_contents($url);
            
            if ($imageData !== false) {
                // Tạo tên file duy nhất
                $fileName = Str::random(10) . '.' . pathinfo($url, PATHINFO_EXTENSION);
                
                // Lưu file vào thư mục public/storage/images
                $filePath = 'templates/images/' . $fileName;
                Storage::disk('public')->put($filePath, $imageData); // Sử dụng đĩa 'public'
                
                return $filePath;
            }
        } catch (\Exception $e) {
            // Log lỗi hoặc xử lý ngoại lệ
            \Log::error('Error downloading image: ' . $e->getMessage());
        }
    
        return null;
    }
    
}
