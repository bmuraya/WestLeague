@extends('layouts.admin')
@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>All Products</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="index.html">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">All Products</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        @if (session('success'))
                            <div class="alert alert-success">

                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <a class="tf-button style-1 w208" href="add-product.html"><i class="icon-plus"></i>Add new</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                       

                          @if($posts->count()>0)
                          <thead>


                            <tr>

                                <th>Image</th>
                                <th>Title</th>

                                <th>Action</th>
                            </tr>
                                </thead>
                        <tbody>

                          @foreach ($posts as $post)
                          <tr>
                              <td>
                                  <img src="{{ asset('storage/' . $post->image) }}" style="width: 150px; height: auto;" alt="Post Image">
                              </td>
                  
                              <td>{{ $post->title }}</td>
                  
                              <td>
                                  <div class="list-icon-function">
                                      @if (!$post->trashed())
                                          <!-- Check if the post is NOT trashed -->
                                          <a href="{{ route('posts.edit', $post->id) }}">
                                              <div class="item edit">
                                                  <i class="icon-edit-3"></i>
                                              </div>
                                          </a>
                                      @endif

                                      <!-- Conditional Form for Delete or Trash -->
                                      @if ($post->trashed())
                                          <!-- If post is trashed, show delete icon for permanent deletion -->
                                          <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                              onsubmit="return confirm('Are you sure you want to permanently delete this post?');">
                                              @csrf
                                              @method('DELETE')
                                              <div class="item text-danger delete">
                                                  <button type="submit" class="item text-danger delete"
                                                      style="background: none; border: none; padding: 0;">
                                                      <i class="icon-trash"></i> <!-- Delete Icon -->
                                                  </button>
                                              </div>
                                          </form>
                                      @else
                                          <!-- If post is not trashed, show trash icon for soft deletion -->
                                          <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                              onsubmit="return confirm('Are you sure you want to trash this post?');">
                                              @csrf
                                              @method('DELETE')
                                              <div class="item text-danger delete">
                                                  <button type="submit" class="item text-danger delete"
                                                      style="background: none; border: none; padding: 0;">
                                                      <i class="icon-trash-2"></i> <!-- Trash Icon -->
                                                  </button>
                                              </div>
                                          </form>
                                      @endif
                                  </div>
                              </td>
                          </tr>
                      @endforeach

                     
                        






                        </tbody>
                    </table>

                    @else

                    
                    <h3  class="text-center">No posts found</h3>
           
                   
                @endif
                </div>

                <div class="divider"></div>
                <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">


                </div>
            </div>
        </div>
    </div>
@endsection
