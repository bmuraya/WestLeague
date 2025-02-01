 @extends('layouts.admin')
 @section('content')
     <div class="main-content-inner ">
         <div class="main-content-wrap">
             <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                 <h3>Categories</h3>
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
                         <div class="text-tiny">Categories</div>
                     </li>
                 </ul>
             </div>

             <div class="wg-box">
                 <div class="flex items-center justify-between gap10 flex-wrap">
                     <div class=" flex-grow">
                         @if (session('success'))
                             <div class="alert alert-success">

                                 {{ session('success') }}
                             </div>
                         @endif
                     </div>
                     <a class="tf-button style-1 w208" href="{{ route('categories.create') }}"><i class="icon-plus"></i>Add
                         new</a>
                 </div>
                 <div class="wg-table table-all-user">
                     <table class="table table-striped table-bordered">
                         
                        @if($categories->count()>0)
                        
                        <thead>
                             <tr>

                                 <th>Name</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>

                             @foreach ($categories as $category)
                                 <tr>
                                     <td>

                                         {{ $category->name }}

                                     </td>


                                     <td>
                                        <div class="list-icon-function">
                                            <a href="{{ route('categories.edit', $category->id) }}">
                                                <div class="item edit">
                                                    <i class="icon-edit-3"></i>
                                                </div>
                                            </a>
                                            
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                                @csrf
                                                @method('DELETE')
                                                <div class="item text-danger delete">
                                                   
                                                    <button type="submit" class="item text-danger delete" style="background: none; border: none; padding: 0;">
                                                        <i class="icon-trash-2"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>


                                     </td>
                                 </tr>
                             @endforeach

                        </tbody>
                     </table>

                     @else

                    
                     <h3  class="text-center">No Category found</h3>
            
                    
                 @endif
                 </div>
                 <div class="divider"></div>
                 <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">

                 </div>
             </div>
         </div>
     </div>
 @endsection
