<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

use App\Models\User;
use Encore\Admin\Form;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }

    public function test(Content $content) {


        $form = new Form(new User);

        // 显示记录id
        $form->display('id', 'ID');

        // 添加text类型的input框
        $form->text('title', '电影标题');

        $directors = [
            1 => 'John',
            2 => 'Smith',
            3 => 'Kate' ,
        ];

        $form->select('director', '导演')->options($directors);

        // 添加describe的textarea输入框
        $form->textarea('describe', '简介');

        // 数字输入框
        $form->number('rate', '打分');

        // 添加开关操作
        $form->switch('released', '发布？');

        // 添加日期时间选择框
        $form->dateTime('release_at', '发布时间');

        // 两个时间显示
        $form->display('created_at', '创建时间');
        $form->display('updated_at', '修改时间');
        $content->body($form);
        return $content;

    }
}
