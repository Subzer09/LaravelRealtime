@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuarios</div>
                <div class="card-body">
                    <ul id="users">

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        window.axios.get('/api/users')
                    .then((response) => {
                        const userElement = document.getElementById('users')
                        let users = response.data;

                        users.forEach((e, i) => {

                            let element = document.createElement('li');
                            element.setAttribute('id', e.id)
                            element.innerText = e.name;

                            userElement.appendChild(element);

                        });

                    })

    </script>
@endpush
