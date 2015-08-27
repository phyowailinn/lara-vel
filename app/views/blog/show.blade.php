@extends('layout.main')
@section('content')

<div class="container">
  <div class="col-md-12">  
 @foreach($blogs as $blog)
           <div class="panel-body">
               <a href="blog/{{ $blog->id }}"><h3>{{{ $blog->title }}}</h3></a>
               <p>
               	{{ $blog->body }}
               </p>
                 <span>Posted in {{ date("F j, Y, g:i a", strtotime($blog->created_at)) }}</span>
             </div>

@endforeach()    
<div class="pull-right">{{ $blogs->links(); }}</div>
   
    
    </div>
 </div>
@stop