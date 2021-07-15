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

    // SERVER STATUS
    $apache = ucfirst(explode(" ", exec('service apache2 status | grep Active'))[6]);
    if ($apache == "Active") {
      $ap_class = 'card text-white bg-success mb-2 text-center';
      $apache = "$apache <i class='las la-check'></i>";
    } else {
      $ap_class = 'card text-white bg-danger mb-2 text-center';
      $apache = "$apache <i class='las la-exclamation'></i>";
    }

    $hdd = str_replace("%", "", exec("df | awk '/ \/$/{print $5}'"));
    if ($hdd <= 60) {
      $hdd_class = 'card text-white bg-success mb-2 text-center';
      $hdd = "$hdd% <i class='las la-check'></i>";
    } else {
      $hdd_class = 'card text-white bg-danger mb-2 text-center';
      $hdd = "$hdd% <i class='las la-exclamation'></i>";
    }

    Widget::add()->to('before_content')
        ->type('div')
        ->class('row col-md-12 ml-1')
        ->content([
          [
            'type'          => 'progress',
            'class'         => $ap_class,
            'value'         => $apache,
            'description'   => 'Apache Status.',
          ],[
            'type'          => 'progress',
            'class'         => $hdd_class,
            'value'         => $hdd,
            'description'   => 'Disk Utilization.',
          ]
        ]);
@endphp

@section('content')
@endsection
