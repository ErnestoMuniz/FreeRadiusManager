@extends(backpack_view('blank'))

@php
    Widget::add()->to('before_content')
        ->type('div')
        ->class('row col-md-12 ml-1')
        ->content([
          [
            'type'        => 'progress',
            'class'       => 'card text-white bg-primary mb-2 text-center',
            'value'       => \App\Models\Nas::count() . ' <i class="las la-server"></i>',
            'description' => 'NAS Servers.'
          ],[
            'type'        => 'progress',
            'class'       => 'card text-white bg-primary mb-2 text-center',
            'value'       => \App\Models\User::count() . ' <i class="la la-user"></i>',
            'description' => 'Users.'
          ],[
            'type'        => 'progress',
            'class'       => 'card text-white bg-primary mb-2 text-center',
            'value'       => \App\Models\Radcheck::count() . ' <i class="las la-list-alt"></i>',
            'description' => 'Radchecks.'
          ],[
            'type'        => 'progress',
            'class'       => 'card text-white bg-primary mb-2 text-center',
            'value'       => \App\Models\Radreply::count() . ' <i class="las la-reply"></i>',
            'description' => 'Radreplies.'
          ]
        ]);
    Widget::add()->to('before_content')
        ->type('div')
        ->class('row col-md-12 ml-1')
        ->content([
          [
            'type'       => 'chart',
            'controller' => \App\Http\Controllers\Admin\Charts\MonthlyRadacctChartController::class,
            'wrapper'    => ['class' => 'col-md-6']
          ],[
            'type'       => 'chart',
            'controller' => \App\Http\Controllers\Admin\Charts\MonthlyRadpostauthChartController::class,
            'wrapper'    => ['class' => 'col-md-6']
          ]
        ]);
@endphp

@section('content')
@endsection
