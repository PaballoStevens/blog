@extends('/admin/layout/app')

@section('content')

<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa-solid fa-house"></i></i></div>
                              All Articles
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a href="/admin/manage_articles" class="btn btn-sm btn-light text-primary" >
                            <i class="fa fa-list"></i>
                            &nbsp; Manage Articles
                        </a>
    
                        <a href="/admin?a=create" class="btn btn-sm btn-light text-primary" >
                            <i class="fa fa-plus"></i>
                            &nbsp; Create New Post
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-fluid px-4">
        <div class="card">
            <div class="card-body">
            @if(Request::get('a') == 'create')
            @include('admin.create')
            @elseif(Request::get('a') == 'edit')
            @include('admin.edit')
            @else
                <table id="datatablesSimple">
                    <thead>
                        <tr> 
                            <th>NO</th>
                            <th>Author</th>
                           <th>Title</th>
                            <th>Category</th>
                            <th>Statics</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Statics</th>
                        </tr>
                    </tfoot>
                    <tbody>
                       @foreach ($article as $item)
                       <tr>
                        <td style="font-weight:bold;text-align:center;color:grey;font-size:25">0<?php 
                            static $num = 0;
                            echo (++$num)
                          ?>
                          </td>
                          <td>{{$item->name}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->title}}</td>
                        
                        <td>
                            <i class="fas fa-eye"></i> &nbsp;{{$item->views}}  
                            <br>
                            <i class="fa fa-thumbs-up" style="font-size:15"></i>&nbsp; {{$item->thumb}}
                            @if($num > 1)
                            @if ($item->thumb ++)
                              <th><i class="fas fa-arrow-up" style="color: green;text-align:center;padding:10;"></i></th> 
                            @else
                               <th><i class="fas fa-arrow-down" style="color: red;text-align:center;padding:10;"></i></th>
                            @endif
                            @else
                            <th><i class="fas fa-trophy" style="color: gold;text-align:center;padding:10;"></i></th>
                            @endif 
                        </td>
                        
                    </tr>
                       @endforeach 
                    </tbody>
                </table>
                @endif
            </div>

        </div>

    </div>
     <!-- Edit group modal-->
     <div class="modal fade" id="createGroupModal" tabindex="-1" role="dialog" aria-labelledby="createGroupModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createGroupModalLabel">Add New Journlist</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin" method="Post">
                        
                        <div class="mb-0">
                            
                            <label class="mb-1 small text-muted" for="formGroupName">House</label>
                             <select class="form-control" name="email" > 
                               
                             </select>
                        </div>
                         <div class="modal-footer">
                    <button class="btn btn-danger-soft text-danger" type="button" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary-soft text-primary" type="submit">Send</button>
                   </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="https://sb-admin-pro.startbootstrap.com/js/datatables/datatables-simple-demo.js"></script>
<script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>
<script type="text/javascript">(function(){window['__CF$cv$params']={r:'71df4c682ebe9cec',m:'nlyqlIPQj.HTCd3.Qcx81jx1rk2TmVqWP2M3ImQEs_Q-1655673519-0-Aag8fQzkLfVEPlnuqjVvzw7PNgkZ/TtyVdDQM2cV9JSbg9UlSjZN4Uy5he4VDLMN/L1J2SN7XR4LKeFdr9PqFmI/HbCB6bBvgxpcBneTfpwrMGYo8y9HScLcVC1jmPWtVL1l3zQqp0cLGbqNraZ3oT9eEVM3xI/TDlOPEnGY+/Ed',s:[0xa87d26d135,0xc6d4f6bf8b],u:'/cdn-cgi/challenge-platform/h/g'}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71df4c682ebe9cec","token":"6e2c2575ac8f44ed824cef7899ba8463","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
@endsection