@extends('layouts.admin')
 @section('content')




 <div class="main-content-inner ">
    <!-- main-content-wrap -->
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3> {{ isset($category) ? 'Edit Category' : 'Create Category' }}</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="#">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="#">
                        <div class="text-tiny">Categories</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">{{ isset($category) ? 'Edit Category' : 'Create Category' }}</div>
                </li>
            </ul>
        </div>
        <!-- new-category -->
        <div class="wg-box">

         

            <form class="form-new-product form-style-1" action=" {{ isset($category) ? route('categories.update' , $category->id ) : route('categories.store')  }}" method="POST"
                enctype="multipart/form-data">

                @csrf
                @if (isset($category))

                @method('PUT')

                @endif
                <fieldset class="name">
                    <div class="body-title">Category Name <span class="tf-color-1">*</span>
                    </div>
                    <input class="flex-grow" type="text" placeholder="Category name" name="name"
                        tabindex="0" value="{{ isset($category) ?  $category->name : ''}}" aria-required="true" >
                        
                </fieldset>
                  @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class=" list-group-item text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                
                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit"> {{ isset($category) ? 'Update Category' : 'Add Category' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
     
     
 @endsection
