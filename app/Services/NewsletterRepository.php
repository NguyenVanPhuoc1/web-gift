<?php

namespace App\Services;

use App\Jobs\SendEmailJob;
use App\Models\News;
use App\Models\NewsletterSubscriber;
use App\Models\NewsTranslation;
use Illuminate\Support\Facades\DB;
use App\Services\FileStorageService;
use Illuminate\Support\Str;


class NewsletterRepository extends AbstractCrud
{

    public function __construct(NewsletterSubscriber $model)
    {
        parent::__construct($model);
    }

    public function baseQuery()
    {
        return NewsletterSubscriber::orderBy('created_at', 'desc')
        ->paginate(5);
    }

    //xóa người dùng
    public function delete($id){
        NewsletterSubscriber::findOrFail($id)->delete();
        
    }
    public function deleteSelectedIds($selectedIds){
        NewsletterSubscriber::whereIn('id', $selectedIds)->delete();
    }
    //send mail
    public function sendMail($data){
        $customers = NewsletterSubscriber::whereIn('id', $data['selectedIds'])->get();
        $emailData = [
            'title_email' => $data['title_email'],
            'content_email' => isset($data['content_email']) ? htmlspecialchars($data['content_email'], ENT_QUOTES, 'UTF-8') : "Cảm Ơn Quý Khách" ,
        ];
        foreach ($customers as $customer) {
            SendEmailJob::dispatch($customer, $emailData);
        }
    }

    //thêm đăng kí nhận tin

    public function addCustomer(array $data){
        return NewsletterSubscriber::create([
            'name' => isset($data['fullname']) ? $data['fullname'] : 'Chưa Cập Nhật',
            'phone' => isset($data['phone']) ? $data['phone'] : '0123456789',
            'email' => $data['email'] ,
            'description' => isset($data['content']) ? $data['content'] : 'Chưa Cập Nhật',
            'is_subscribed' => true,
        ]);
    }
}