@extends('layouts.main')
@section('content')

<div class="lg:container lg:mx-auto">
<br/>
    @if($errors->any())
    @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error  }}
            </div>
    @endforeach
    @endif

<p class="h4 mb-4">Create Message</p>

<form class="w-full max-w-lg" action="{{ route('store') }}" method="POST">
    {{ csrf_field() }}
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-subject">
        Subject
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-subject" type="text" name="subject" placeholder="Subject">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-body">
        Body
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-body" name="body" type="text" placeholder="Body" required>
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Content
      </label>
      <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-content" name="content" placeholder="Content" required></textarea>
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
      <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
    </div>
  </div>
  <!-- Save button -->
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Add Message</button>
</form>
</div>
<br/>
@endsection