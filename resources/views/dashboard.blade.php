@extends('template')

@section('title', 'Dashboard - Lapor.Pal')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold mb-4">Blockchain Data Laporan</h2>
        <p class="text-gray-600 mb-6">Berikut adalah data laporan yang tersimpan dalam blockchain.</p>

        <!-- Tabel -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-kuning">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Index</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Timestamp</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Hash</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Previous Hash</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Source</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Type</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Status Laporan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Sub Status</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Keterangan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Lokasi</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Latitude / Longitude</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Waktu Dibuat</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Waktu Penyelesaian</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Tracking Status</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Deskripsi</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Dinas ID / Masyarakat ID</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Alasan Penolakan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Created At (Blockchain)</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data Dummy -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">1</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">2025-05-28 17:56:00</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b truncate max-w-xs">a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b truncate max-w-xs">00000000000000000000000000000000</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">VM5</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Laporan</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Selesai</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Selesai</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Telah diselesaikan oleh dinas terkait</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Jalan Sudirman, Malang</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">
                            <a href="https://maps.google.com/?q=-7.982614,112.630874" target="_blank" class="text-blue-500 hover:underline">
                                -7.982614, 112.630874
                            </a>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">2025-05-27 14:00:00</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">2025-05-28 09:00:00</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Selesai</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Jalan berlubang di dekat pasar</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Dinas-001 / Masyarakat-123</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">-</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">2025-05-28 17:56:00</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">2</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">2025-05-28 17:56:00</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b truncate max-w-xs">b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b truncate max-w-xs">a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">VM5</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Laporan</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Diproses</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Proses</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Sedang ditindaklanjuti oleh dinas</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Jalan Veteran, Malang</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">
                            <a href="https://maps.google.com/?q=-7.966618,112.632632" target="_blank" class="text-blue-500 hover:underline">
                                -7.966618, 112.632632
                            </a>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">2025-05-28 08:00:00</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">-</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Di Proses</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Sampah menumpuk di pinggir jalan</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Dinas-002 / Masyarakat-456</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">-</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">2025-05-28 17:56:00</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">3</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">2025-05-28 17:56:00</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b truncate max-w-xs">c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b truncate max-w-xs">b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">VM5</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Laporan</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Ditolak</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Ditolak</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Laporan tidak memenuhi syarat</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Jalan Ijen, Malang</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">
                            <a href="https://maps.google.com/?q=-7.976618,112.622632" target="_blank" class="text-blue-500 hover:underline">
                                -7.976618, 112.622632
                            </a>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">2025-05-28 10:00:00</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">-</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Ditolak</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Lampu jalan mati</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Dinas-003 / Masyarakat-789</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">Data tidak lengkap</td>
                        <td class="px-4 py-2 text-sm text-gray-600 border-b">2025-05-28 17:56:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
