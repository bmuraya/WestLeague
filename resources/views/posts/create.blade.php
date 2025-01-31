@extends('layouts.admin')
@section('content')

<div class="main-content-inner">
    <!-- main-content-wrap -->
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Create Post</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="index-2.html">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="all-product.html">
                        <div class="text-tiny">Products</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Create Post</div>
                </li>
            </ul>
        </div>
        <!-- form-add-product -->
        <form class="tf-section-2 form-add-product" method="POST" enctype="multipart/form-data"
            action="{{ route('posts.store') }}">
            @csrf

            
            <div class="wg-box">
                <fieldset class="name">
                    <div class="body-title mb-10">Title<span class="tf-color-1">*</span>
                    </div>
                    <input class="mb-10" type="text" placeholder="Page Title name"
                        name="title" id="title" tabindex="0" value="" aria-required="true" required>
                    <div class="text-tiny">Do not exceed 50 characters when entering the
                        .</div>
                </fieldset>

               

             

                <fieldset class="shortdescription">
                    <div class="body-title mb-10">Short Description <span
                            class="tf-color-1">*</span></div>
                    <textarea class="mb-10 ht-150" name="description" id="description"
                        placeholder="Short Description" tabindex="0" aria-required="true"
                        required></textarea>
                    <div class="text-tiny">Do not exceed 100 characters when entering the
                        .</div>
                </fieldset>

                <fieldset class="description">
                    <div class="body-title mb-10">Content <span class="tf-color-1">*</span>
                    </div>
                    <textarea class="mb-10" name="content" id="content" placeholder=" Full Content"
                        tabindex="0" aria-required="true" required></textarea>
                    <div class="text-tiny">Do not exceed 500 characters when entering the
                        .</div>
                </fieldset>
            </div>
            <div class="wg-box">
                <fieldset>
                    <div class="body-title">Upload images <span class="tf-color-1">*</span>
                    </div>
                    <div class="upload-image flex-grow">
                        <div class="item" id="imgpreview" style="display:none">
                            <img src="../../../localhost_8000/images/upload/upload-1.png"
                                class="effect8" alt="">
                        </div>
                        <div id="upload-file" class="item up-load">
                            <label class="uploadfile" for="myFile">
                                <span class="icon">
                                    <i class="icon-upload-cloud"></i>
                                </span>
                                <span class="body-text">Drop your images here or select <span
                                        class="tf-color">click to browse</span></span>
                                <input type="file" id="myFile" name="image" accept="image/*">
                            </label>
                        </div>
                    </div>
                </fieldset>

               

                <div class="cols ">
                    <fieldset class="name">
                        <div class="body-title mb-10">published at <span
                                class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Date published"
                            name="published_at" id="published_at"  value="" aria-required="true"
                            required>
                    </fieldset>
                 
                </div>
              


               

             
                <div class="cols gap10">
                     <button class="tf-button w-full" type="submit">Submit</button>
                </div>
            </div>
        </form>
        <!-- /form-add-product -->
    </div>
    <!-- /main-content-wrap -->
</div>



@endsection
