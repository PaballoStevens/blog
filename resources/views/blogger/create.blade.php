@extends('/blogger/layout/app')

@section('content')

 <script src="https://cdn.tiny.cloud/1/ofq3esqpn0ltymb89297z0b11mfgzn10tolcmt6bqi8ohvff/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-plus"></i></div>
                            Add Post
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a href="/blogger" class="btn btn-sm btn-light text-primary" >
                            <i class="fa fa-house"></i> &nbsp;
                            Dashboard
                        </a>
                        
                        <a href="/blogger/manage_articles" class="btn btn-sm btn-light text-primary" >
                            <i class="fa fa-list"></i>
                            &nbsp; Manage Articles
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-x1 px-5 mt-5">
        <form action="/blogger/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card ">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('Add Category') }}</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body ">
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input type="hidden" value="{{Auth::user()->id}}" name="userid" />
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="title"  type="text" placeholder="{{ __('Name') }}" value="" required="true" aria-required="true" />
                      </div>
                    </div>
                  </div>
                    <br>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Content') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <textarea class="md-textarea form-control" rows="5" name="content">
     
                        </textarea>
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
                  </div>
                   <br>
                   <div class="row">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-7">
                        <input type="file" name="image" class="form-control" placeholder="image">
                      
                    </div>
                  </div>
                  <br>
                  <div class="row">
                   <label for="tag" class="col-sm-2 col-form-label">Tag</label>
                   <div id="select" class="col-sm-7">
                       <select name="tags" class="form-control">
                        <?php $Articles = App\Models\Article::select(['tags'])->get(); ?>
											<option >Select Tag...</option>
											@foreach ($Articles as $item)
											 <option value="{{$item->tags}}">{{$item->tags}}</option>
											@endforeach
                        <option value="Tech">Technology</option>
                       </select>
                       <br>
                       <a id="reply">Others</a>
                   </div>
                 </div>
                </div>
                <div class="card-footer ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                </div>
              </div>
        </form>  
    </div>
    <script>
      const reply = document.querySelector('#reply');
       const select = document.querySelector('#select');
       
       reply.style.cursor = 'pointer';

        reply.addEventListener('click', function() {
        select.innerHTML ='<input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="tags"  type="text" placeholder="{{ __('Tag') }}"  />';
       
        
       })
    
    
       /*var reply = document.querySelectorAll('#reply');
       
        for (let i = 0; i < reply.length; i++) {
           reply[i].addEventListener('click', function() {
           this.innerHTML =' <br><form action="" method="post" > @csrf<input placeholder="name"/><br><button type="submit">Send</button></form>';
       })
        }*/
    </script>
</main>

@endsection