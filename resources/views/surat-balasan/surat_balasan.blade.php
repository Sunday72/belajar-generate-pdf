<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> --}}
    <title>Surat Balasan PKL</title>
    <style>
        @page { size: auto;  margin: 0mm; }
        @media print {
            body *:not(#main-content):not(#main-content *) {
                visibility: hidden;
            }

            #main-content {
                margin-top: 20px;
            }
        }

        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        #btn-print {
            position: absolute;
            right: 10px;
            padding: 12px 30px;
            font-weight: bold;
            border: 2px solid black;
            transition: all 100ms;
            font-family: sans-serif;
            letter-spacing: 3px;
            box-shadow: 0 10px 20px rgba(0,0,0,.3)
        }

        #btn-print:hover {
            cursor: pointer;
            background: #000;
            color: white;
        }
    </style>
</head>
<body>
    <a href="javascript:history.back()" style="position: absolute">kembali</a>
    <button id="btn-print" onclick="cetak_pdf()">PRINT</button>
    {{-- Kop --}}
    <div id="main-content">
        <table align="center" style="width: 21cm; margin-bottom: 5px;">
            <tr>
                <td>
                    <img src="{{ asset('img/logo-unj.png') }}" alt="Logo UNJ" width="90" height="90">
                </td>
                <td>
                    <center>
                        <font size="4">Universitas Negeri Jakarta</font><br>
                        <font size="5"><b>Pusat Teknologi Informasi dan Komunikasi</b></font><br>
                        <font size="2"><i>Jl. R.Mangun Muka Raya No.11, RT.11/RW.14, Rawamangun, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</i></font>
                    </center>
                </td>
                <td>
                    <img src="{{ asset('img/logo-pustikom-unj.jpg') }}" alt="Logo Pustikom" width="90" height="90">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr style="border-top: 1px solid black">
                </td>
            </tr>
        </table>
        {{-- End Kop --}}
    
        {{-- Tujuan --}}
        <table align="center" style="padding: 0 20px; width: 21cm;">
            <tr>
                <td style="vertical-align: top">
                    <table>
                        <tr>
                            <td>Nomor</td>
                            {{-- <td> : 00/5/25.082.BBSM/2022</td> --}}
                            <td> : {{$component['nomor_surat']}}</td>
                        </tr>
                        <tr>
                            <td>Lamp</td>
                            <td> : -</td>
                        </tr>
                        <tr>
                            <td>Perihal</td>
                            <td> : {{$component['perihal']}}</td>
                        </tr>
                    </table>
                </td>
                <td style="width: 40%; vertical-align: top">
                    <table align="right">
                        <tr>
                            <td>{{$component['tempat']}}, {{$component['tanggal']}}</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <tr>
                    <td height="20"></td>
                </tr>
                <tr>
                    <td>Kepada Yth.</td>
                </tr>
                <tr>
                    <td>{{$component['kepada']}}</td>
                </tr>
                <tr>
                    <td>Di</td>
                </tr>
                <tr>
                    <td>{{$component['di']}}</td>
                </tr>
            </tr>
        </table>
        {{-- End Tujuan --}}
    
        {{-- Body --}}
        <table align="center" style="line-height: 25px; width: 21cm;">
            <tr>
                <td style="text-align: justify; text-indent: 40px; padding: 0 20px">
                    <p>
                        {{$component['pembuka']}}
                    </p>
                    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width: 100%; text-align: center">
                        <thead>
                            <tr>
                                <th width="70">No</th>
                                <th width="350">Nama</th>
                                <th>NIS</th>
                            </tr>   
                        </thead>
                        <tbody>
                            @if (!($component['nama'][0] == null))
                                @php
                                    $no = 1;
                                @endphp
                                @for ($i = 0; $i < count($component['nama']); $i++)
                                @if ($component['nama'][$i] == null)
                                    @continue
                                @endif
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$component['nama'][$i]}}</td>
                                    <td>{{$component['nis'][$i]}}</td>
                                </tr>
                                @php
                                    $no++;
                                @endphp
                                @endfor
                            @else
                                <tr>
                                    <td colspan="3">Mana ga ada siswa tuh</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <p>
                        {{$component['penutup']}}
                    </p>
                    <p>
                        Demikian surat balasan yang dapat kami sampaikan atas perhatian dan kerja samanya, kami ucapkan terima kasih.
                    </p>
                </td>
            </tr>
        </table>
        {{-- End Body --}}
    
        {{-- Ttd --}}
        <table align="center" style="margin-top: 20px; width: 21cm">
            <tr>
                <td><center>Kepala Sub Bagian,</center></td>
            </tr>
            <tr>
                <td height="70"></td>
            </tr>
            <tr>
                <td>
                    <u><center>Irfan Saputra</center></u>
                </td>
            </tr>
            <tr>
                <td><center>Nip. 192 192481686 001 1</center></td>
            </tr>
        </table>
        {{-- End Ttd --}}
    </div>
    <script>
        function cetak_pdf(){
            window.print();
        }
    </script>
</body>
</html>