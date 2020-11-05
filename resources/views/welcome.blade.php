@extends('layouts.main')
@section('content')
<br/>
    <div class="container">
    <p class="h4 mb-4">Message Dashboard</p>

    @if(session('successMsg'))
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
        <p class="font-bold">Informational message</p>
        <p class="text-sm">{{ session('successMsg')  }}</p>
        </div>
    @endif

    <table class="table-auto">
        <thead>
            <tr>
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">Subject</th>
            <th class="px-4 py-2">Body</th>
            <th class="px-4 py-2">Content</th>
            <th class="px-4 py-2">Sent At</th>
            <th class="px-4 py-2">Read At</th>
            <th class="px-4 py-2">Archived At</th>
            <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <tr>
                <td class="border px-4 py-2">{{ $message->id }}</td>
                <td class="border px-4 py-2">{{ $message->subject }}</td>
                <td class="border px-4 py-2">{{ $message->body }}</td>
                <td class="border px-4 py-2">{{ $message->content }}</td>
                <td class="border px-4 py-2">{{ $message->sent_at }}</td>
                <td class="border px-4 py-2">{{ $message->read_at }}</td>
                <td class="border px-4 py-2">{{ $message->archived_at }}</td>
                <td class="border px-4 py-2">
                    <a class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" href="{{ route('view', $message->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                </td>
                </tr>
            @endforeach
        </tbody>
        </table>

        {{ $messages->links() }}
</div>
<br/>
@endsection

