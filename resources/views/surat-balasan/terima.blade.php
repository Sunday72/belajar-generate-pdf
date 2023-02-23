<!doctype html>
<html lang="en">

<head>
  <title>Belajar Generate PDF | Surat Terima PKL</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
            background: #bbb;
        }

        button.btn-generate {
            border: none;
            background: #1f1f1f;
            padding: 10px 18px;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            box-shadow: 0 8px #444;
            transition: all 200ms;
        }

        button.btn-generate:active {
            
        }
    </style>

</head>

<body>
    <div class="container">
        <a href="javascript:history.back()">kembali</a>
        
        <div class="mt-4">
            <h3>Generate Surat Balasan | PDF</h3>
            <hr>
        </div>
        {{-- MAIN --}}

        {{-- 
            
            Isi Form:
            *>> Nomor Surat
            *>> Perihal
            *>> Tempat dan Tanggal Surat
            *>> Kepada Yth. 
            *>> Di -
            *>> Body (pembuka)
            *>> Nama dan NIS (Tabel)
            >> Penutup
            >> Hormat Kami,
            
        --}}
        <form action="/school/terima" method="post">
            @csrf

            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="nomor_surat" class="form-label">Nomor Surat</label>
                        <input type="text" class="form-control form-control-sm" name="nomor_surat" id="nomor_surat">
                    </div>
                    <div class="mb-3">
                        <label for="perihal" class="form-label">Perihal</label>
                        <input type="text" class="form-control form-control-sm" name="perihal" id="perihal" value="Penerimaan Praktek Kerja Lapangan">
                    </div>
                    <div class="mb-3">
                        <label for="tempat" class="form-label">Tempat & Tanggal</label>
                        <div class="row">
                            <div class="col">
                              <input type="text" class="form-control form-control-sm" name="tempat" id="tempat" value="Jakarta">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control form-control-sm" name="tanggal" value="{{$current_date}}">
                            </div>
                          </div>
                    </div>
                    <div class="mb-3">
                        <label for="kepada" class="form-label">Kepada Yth.</label>
                        <input type="text" class="form-control form-control-sm" name="kepada" id="kepada" value="Kepala Sekolah {{$school->nama_sekolah}}">
                    </div>
                    <div class="mb-3">
                        <label for="di" class="form-label">Di -</label>
                        <input type="text" class="form-control form-control-sm" name="di" id="di" value="Tempat">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="pembuka" class="form-label">Body (Pembuka)</label>
                        <textarea type="text" class="form-control form-control-sm" name="pembuka" id="pembuka" rows="6">Sehubungan dengan Surat Permohonan Praktik Kerja Lapangan (PKL) No: .../....../../.... yang diajukan kepada kami oleh siswa bapak/ibu atas nama:</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="penutup" class="form-label">Penutup</label>
                        <textarea type="text" class="form-control form-control-sm" name="penutup" id="penutup" rows="6">Dengan ini kami memberikan ijin kepada siswa-siswa tersebut diatas untuk melakukan Kegiatan Praktik Kerja Lapangan (PKL) dengan instansi kami, semoga terlaksananya PKL ke depannya dapat memberikan dampak yang bermanfaat.</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <table class="borderless" cellpadding="5">
                            <thead>
                                <tr class="text-center">
                                    <th>Nama</th>
                                    <th>NIS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="nama[]" class="form-control form-control-sm"></td>
                                    <td><input type="number" name="nis[]" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="nama[]" class="form-control form-control-sm"></td>
                                    <td><input type="number" name="nis[]" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="nama[]" class="form-control form-control-sm"></td>
                                    <td><input type="number" name="nis[]" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="nama[]" class="form-control form-control-sm"></td>
                                    <td><input type="number" name="nis[]" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="nama[]" class="form-control form-control-sm"></td>
                                    <td><input type="number" name="nis[]" class="form-control form-control-sm"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-generate m-auto d-block mt-4">Generate Now</button>
        </form>
        <a href="/template">Lihat Template</a>
        {{-- END MAIN --}}
    </div>





  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>