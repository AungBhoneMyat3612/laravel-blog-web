@props(['categories'])
<x-admin-layout>
    <h3 class="my-3 text-center">Blog create form</h3>
    <x-card-warper>
        <form action="/admin/blogs/store" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="intro" />
            <x-form.textarea name="body" />
            <x-form.input name="thumbnail" type="file" />
            <x-form.input-warpper>
                <x-form.label name="category" />
                <select name="category_id" id="category" class="form-control">
                    <option @selected(!old('category_id')) value="" disabled>------</option>
                    @foreach ($categories as $category)
                        <option @selected($category->id == old('category_id')) value="{{ $category->id }}">
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
