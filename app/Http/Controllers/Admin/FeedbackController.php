<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Screens\FeedbackScreen;
use Illuminate\Http\Request;
use App\Models\Adfm\FeedbackMessage;

class FeedbackController extends Controller
{

    public function index()
    {
        FeedbackScreen::index();
    }

    /**
     * Создание
     */
    public function store(Request $request)
    {
        $item = new FeedbackMessage();
        $item->fill(['fields' => $request->all()['fields']])->save();
        \Illuminate\Support\Facades\Mail::send('adfm::email.feedback', ['item' => $item], function($message)
        {
            $message->from('info@mail-robot.wtolk.ru', 'Почтовый робот');
            $message->to('blwoalf@wtolk.ru')->subject('Сообщение с сайта Абаканский Консервный Цех');
        });
        return '200';
    }

    /**
     *  Смотреть етали сообщения
     */
    public function showMessageDetails($id)
    {
        FeedbackScreen::showMessageDetails();
    }

    /**
     * Удаляем в корзину
     */
    public function destroy($id)
    {
        FeedbackMessage::destroy($id);
        return redirect()->route('adfm.feedbacks.index');
    }
}
