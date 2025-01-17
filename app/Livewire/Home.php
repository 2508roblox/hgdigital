<?php
namespace App\Livewire;

use App\Models\Blog;
use App\Models\Contact;
use Livewire\Component;

class Home extends Component
{

    public $name;
    public $email;
    public $phone;
    public $company;
    public $message;
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'company' => 'nullable|string|max:255',
        'message' => 'required|string|max:1000',
    ];
    public function mount()
    {
    }
    public function submit()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'company' => $this->company,
            'message' => $this->message,
        ]);

        session()->flash('success', 'Thông tin liên hệ của bạn đã được gửi thành công!');

        // Reset các trường
        $this->reset();
        return redirect()->to('/');
    }
    public function render()
    {
        $blogs = Blog::with('category')->latest()->take(3)->get();

        return view('livewire.home', [
            'meta' => [
                'title' => 'Công ty thiết kế website chất lượng giá rẻ - HG Digital',
                'description' => 'HG Digital chuyên cung cấp dịch vụ thiết kế website chuyên nghiệp, giá rẻ, tối ưu SEO, hỗ trợ kỹ thuật tận tâm.',
                'keywords' => 'thiết kế website, dịch vụ thiết kế web, website giá rẻ, HG Digital',
                'author' => 'HG Digital',
            ],
            'blogs' => $blogs, // Truyền dữ liệu bài viết vào view
        ]);
    }
}
