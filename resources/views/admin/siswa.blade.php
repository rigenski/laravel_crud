@extends('../layouts/master')
@section('title', 'Siswa')
@section('header', 'Siswa')
@section('content')
<div class="card-body p-0">
  <div class="d-flex justify-content-between mb-4">
    <a href="/siswa/create" class="btn btn-primary px-4">Tambah Siswa</a>
    @if (session('status'))
    <div class="alert alert-success mx-2 my-0 py-2">
      {{ session('status') }}
    </div>
    @endif
  </div>
    <div class="table-responsive">
        <table class="table table-striped table-md">
          <tr>
              <th>#</th>
              <th>NISN</th>
              <th>Nama Lengkap</th>
              <th>Gender</th>
              <th>Email</th>
              <th>No. Whatsapp</th>
              <th>Action</th>
        </tr>
        <?php $x = 0; ?>
        @foreach ($students as $key => $student)
        <tr>
            <td>{{ ++$key + ($students->currentPage() - 1) * $students->perPage()}}</td>
            <td>{{ $student->nisn }}</td>
            <td>{{ $student->nama_lengkap }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->no_wa }}</td>
            <td><a href="siswa/{{ $student->id }}" class="btn btn-warning mx-1">Edit</a><a href="#" class="btn btn-danger mx-1 trigger--fire-modal-7" data-confirm="Yakin ... ?| Apakah kamu ingin menghapus data Siswa ini?" data-confirm-yes="window.location.href = '/siswa/{{$student->id}}/delete';">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>
</div>
<div class="card-footer d-flex justify-content-between mb-4">
    <p>
      Jumlah Data : {{$students->total()}}
    </p>
    <nav class="d-inline-block mb-0">
      {{ $students->links()}}
    </nav>
</div>
@endsection