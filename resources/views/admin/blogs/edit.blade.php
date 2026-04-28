@props(['categories'])
<x-admin-layout>
    <h3 class="my-3 text-center">Blog Edit form</h3>
    <x-card-warper>
        <form action="/admin/blogs/{{ $blog->slug }}/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="title" value="{{ $blog->title }}" />
            <x-form.input name="slug" value="{{ $blog->slug }}" />
            <x-form.input name="intro" value="{{ $blog->intro }}" />
            <x-form.textarea name="body" value="{{ $blog->body }}" />
            <x-form.input name="thumbnail" type="file" />
            <img src="/storage/{{ $blog->thumbnail }}" alt="" width="200px" height="100px">
            <x-form.input-warpper>
                <x-form.label name="category" />
                <select name="category_id" id="category" class="form-control">
                    <option @selected(!old('category_id')) value="" disabled>------</option>
                    @foreach ($categories as $category)
                        <option @selected($category->id == old('category_id', $blog->category->id)) value="{{ $category->id }}">
                            {{ $category->name }}</option>
                    @endforeach
                </select>
                <x-error name="category_id" />
            </x-form.input-warpper>
            <x-form.input-warpper>
                <button type="submit" class="btn btn-primary">Submit</button>
            </x-form.input-warpper>
        </form>
    </x-card-warper>
</x-admin-layout>
