<!DOCTYPE html>
<html>
  <head> 

    <base href="/pulic">

    <style type="text/css">

        .post_title
        {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }

        .div_center
        {
            text-align: center;
            padding: 30px;
        }
        label
        {
            display: inline-block;
            width: 200px;
        }

    </style>

    @include('admin.css')
  </head>
  <body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">

      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">

        <h1 class="post_title">Update Post</h1>

        <form action="{{url('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="div_center">
                <label>Post Title</label>
                <input type="text" name="title" value="{{$post->title}}">
            </div>

            <div class="div_center">
                <label>Post Description</label>
                <textarea name="description">{{$post->description}}</textarea>
            </div>
            <div class="div_center">
                <label >Old Image</label>
                <img style="margin: auto;" height="150px" width="150px" src="/postimage/{{$post->image}}">
            </div>

            <div class="div_center">
                <label>Update Old Image</label>
                <input type="file" name="image">
            </div>

            <div class="div_center">
                
                <input type="submit" class="btn btn-primary">
            </div>


        </form>

      </div>

        @include('admin.footer')
  </body>
</html>