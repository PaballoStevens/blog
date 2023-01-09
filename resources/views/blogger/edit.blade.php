@extends('/blogger/layout/app')

@section('content')

<script src="https://cdn.tiny.cloud/1/ofq3esqpn0ltymb89297z0b11mfgzn10tolcmt6bqi8ohvff/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<?php $post = App\Models\Article::where('id', $_GET['rid'])->get(); 
?>
<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa-solid fa-pen-to-square"></i></div>
                            Edit Article
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a href="/blogger/manage_articles" class="btn btn-sm btn-light text-primary" >
                            <i class="fa fa-list"></i>
                            &nbsp; Manage Articles
                        </a>
    
                        <a href="/blogger?a=create" class="btn btn-sm btn-light text-primary" >
                            <i class="fa fa-plus"></i>
                            &nbsp; Create New Post
                        </a>
                    </div> 
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-4">
    @if(count($post) > 0)
        <form action="/blogger/edit" method="post">
            @csrf
        <div class="row">
            <div class="col-xl-12">
                <!-- Profile picture card-->
                <input class="form-control" name="id" type="hidden" value="{{$post[0]->id}}">

                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Aritcle Title</div>
                    <div class="card-body text-center">
                            <input class="form-control" name="title" type="text" value="{{$post[0]->title}}">
                        </div>
                </div>
                 <br>
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Article Content</div>
                    <div class="card-body text-center">
                       <textarea name="content" value="{!! $post[0]->content !!}">{!! $post[0]->content !!}</textarea>

                    </div>   
                </div>
                <br>
                <div class="col-xl-8">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0 ">
                        <button class="btn btn-primary btn-lg" type="submit">Update</button>
                    </div>
                </div> 
            </form>
                <br>
                <br>
            <div class="pd-ltr-20">
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Article Details</h4>
                            <p class="mb-20"></p>
                        </div>
                    </div>
                        <br>
                        <div class="form-group row">
                                <label style="font-size:16px;" class="col-sm-12 col-md-2 col-form-label"><b>Waiting Remarks</b></label>
                                <div class="col-sm-12 col-md-10">
                                    @if ($post[0]->AdminRemark == ""):
                                    <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value=" Waiting for Approval">
                                    @else
                                    <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="{!! $post[0]->AdminRemark !!}">
                                    @endif
                                      
                                </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                   <label style="font-size:16px;"><b>Action Taken Date</b></label>
                                     @if ($post[0]->AdminRemarkDate == "")
                                     <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="NA">
                                     @else
                                     <input type="text" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="{{$post[0]->AdminRemarkDate}}">
                                     @endif
                                      
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label style="font-size:16px;"><b>Article Status From Admin</b></label>
                                      @if ($post[0]->p_status == '1')
                                      <input type="text" style="color: green;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="Published"> 
                                      @elseif($post[0]->p_status == '0')
                                      <input type="text" style="color: red; font-size: 16px;" class="selectpicker form-control" data-style="btn-outline-primary" readonly value="Not Published">
                                      @endif
                                </div>
                            </div>
                           
                        </div>
                </div>
            </div>
                <br>  
            </div>
        </div>    
         
        @else 
<h3>Post not found</h3>
        @endif 
    </div>
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
           toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
        });
      </script>
</main>
@endsection