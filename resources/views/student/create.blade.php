<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Students Add | {{ env('APP_NAME') }}</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/fontawesome/css/all.min.css">
</head>
<body>

<div class="container">
 <div class="container-fluid mt-4">
 <div class="card">
 <div class="card-header">Tambah Siswa Siswa
 <a href="{{ route('student.index') }}" type="button" style="float:right"
 class="btn btn-danger"><i class="fas fa-arrow-left mr-2"> </i> Kembali</a>
 </div>
 <form action="/student/add" method="POST">
 @csrf
 <div class="card-body">
 @if(session('notifikasi'))
 <div class="form-group mb-2">
 <div class="alert alert-{{ session('type') }}">
 {{ session('notifikasi') }}
 </div>
 </div>
 @endif
 <div class="form-group mb-2">
 <label for="nama">NIM <b class="text-danger">*</b></label>
 <input required placeholder="Masukkan NIM" type="text" id="nim" name="nim"
 class="form-control @error('nim') is-invalid @enderror"
 value="{{ old('nim') }}">
 @error('nim')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
 <div class="form-group mb-2">
<label for="nama">Nama <b class="text-danger">*</b></label>
<input required placeholder="Masukkan Nama" type="text" id="nama" name="nama"
 class="form-control @error('nama') is-invalid @enderror"
 value="{{ old('nama') }}">
@error('nama')
 <div class="invalid-feedback">{{ $message }}</div>
@enderror
 </div>
<div class="form-group mb-2">
<label for="nama">E-Mail <b class="text-danger">*</b></label>
<input required placeholder="Masukkan E-Mail" type="email" id="email"
 name="email" class="form-control
 @error('email') is-invalid @enderror" value="{{ old('email') }}">
@error('email')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
 </div>
 <div class="form-group mb-2">
<label for="nama">Prodi <b class="text-danger">*</b></label>
<select required id="prodi" name="prodi" class="form-control
 @error('prodi') is-invalid @enderror" required>
<option value="">- Pilih Prodi -</option>
<option>Teknik Informatika</option>
<option>Rekayasa Keamanan Siber</option>
<option>Teknologi Rekayasa Perangkat Lunak</option>
<option>Teknologi Rekayasa multimedia</option>
</select>
 @error('prodi')
 <div class="invalid-feedback">{{ $message }}</div>
 @enderror
 </div>
</div>
 <div class="card-footer">
<a href="{{ route('student.index') }}" class="btn btn-danger">Batal</a>
 <button type="reset" class="btn btn-warning">Reset</button>
<button type="submit" class="btn btn-success">Simpan</button>
</div>
</form>
</div>
</div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.
com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.
com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
