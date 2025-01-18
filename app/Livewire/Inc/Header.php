<?php

namespace App\Livewire\Inc;

use App\Models\AccessHistory;
use App\Models\TemplateCategory;
use Livewire\Component;

class Header extends Component
{
    public $templateCategories;

    public function mount()
    {
        $this->recordAccess();
        $this->templateCategories = TemplateCategory::all();
    }
    private function recordAccess()
    {
        $today = now()->toDateString(); // Lấy ngày hiện tại

        // Kiểm tra xem bản ghi cho ngày hôm nay đã tồn tại chưa
        $accessRecord = AccessHistory::where('date', $today)->first();

        if ($accessRecord) {
            // Nếu đã tồn tại, tăng số lượt truy cập
            $accessRecord->increment('visit_count');
        } else {
            // Nếu chưa tồn tại, tạo mới bản ghi
            AccessHistory::create([
                'date' => $today,
                'visit_count' => 1,
            ]);
        }
    }
    public function render()
    {
        return view('livewire.inc.header');
    }
}
