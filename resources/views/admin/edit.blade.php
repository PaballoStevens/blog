@extends('/admin/layout/app')

@section('content')

<script src="https://cdn.tiny.cloud/1/ofq3esqpn0ltymb89297z0b11mfgzn10tolcmt6bqi8ohvff/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<?php $post = App\Models\Article::where('slug', $_GET['rid'])->get(); 
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
    <div class="container-xl px-4 mt-4">
    @if(count($post) > 0)
        <form action="/admin/edit" method="post">
            @csrf
        <div class="row">
            <div class="col-xl-12">
                <!-- Profile picture card-->
                <input class="form-control" name="id" type="hidden" value="{{$post[0]->id}}">

                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Post Title</div>
                    <div class="card-body text-center">
                            <input class="form-control" name="title" type="text" value="{{$post[0]->title}}">
                        </div>
                </div>
                 <br>
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Post Content</div>
                    <div class="card-body text-center">
                       <textarea id="content"name="content" value="{!! $post[0]->content !!}">{!! $post[0]->content !!}</textarea>
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
                    </div>
                </div>
                 <br>
                 <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Admin Remark</div>
                    <div class="card-body text-center">
                       <textarea name="AdminRemark" >"{!! $post[0]->AdminRemark !!}
     
                      </textarea>
  
                    </div>
                </div>
                <br>
            <div class="col-xl-5">
                <div class="col-xl-8">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Category</div>
                        <div class="card-body text-center">
                            
                            <select class="form-control" name="p_status">
                            <option value="{{$post[0]->p_status}}">
                                @if ($post[0]->p_status =='0')
                                <span style="color: red">Not Published</span>
                                @elseif($post[0]->p_status =='1')
                                <span style="color: green">Published</span>
                                @endif
                            </option> 
                            <option value="1"><span style="color: green">Publish</span></option> 
                            </select>
                        </div>
                        <br>
                    </div>
                </div>
                <br>
                
                <div class="col-xl-8">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0 ">
                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                    </div>
                </div>
                
            </div>
            
        </div>    
        </form> 
        @else 
<h3>Post not found</h3>
        @endif 
    </div>
</main>
@endsection