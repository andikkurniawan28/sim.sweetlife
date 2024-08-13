<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\Kebun;
use App\Models\Satuan;
use App\Models\Rafaksi;
use App\Models\TarifPajak;
use App\Models\KondisiPanen;
use Illuminate\Database\Seeder;
use App\Models\ParameterBudidaya;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::insert([
            ["nama" => "Karyawan"],
            ["nama" => "Petani"],
        ]);

        Satuan::insert([
            ["nama" => "Buah"],
            ["nama" => "Gram"],
            ["nama" => "Kilogram"],
            ["nama" => "Botol"],
            ["nama" => "Pack"],
            ["nama" => "Jerigen"],
            ["nama" => "Box"],
            ["nama" => "Celcius"],
            ["nama" => "%"],
            ["nama" => "Candela"],
            ["nama" => "pH"],
            ["nama" => ""],
        ]);

        TarifPajak::insert([
            ["nama" => "PPn 11%", "nilai" => 11],
        ]);

        Rafaksi::insert([
            ["nama" => "Bersih", "nilai" => 0],
            ["nama" => "Campur Tanah", "nilai" => 0.5],
        ]);

        Kebun::insert([
            ["kode" => "SLF1", "nama" => "Kebun Sendiri 1", "metode" => "Indoor"],
            ["kode" => "LWG1", "nama" => "Kebun Lawang 1", "metode" => "Outdoor"],
        ]);

        KondisiPanen::insert([
            ["kode" => "BP", "nama" => "Belum Petik", "satuan_id" => 2],
            ["kode" => "SP", "nama" => "Sudah Petik", "satuan_id" => 2],
            ["kode" => "SK", "nama" => "Sudah Kering", "satuan_id" => 2],
            ["kode" => "SG", "nama" => "Sudah Giling", "satuan_id" => 2],
            ["kode" => "CP", "nama" => "Campuran", "satuan_id" => 2],
        ]);

        ParameterBudidaya::insert([
            ["kode" => "Temp", "nama" => "Suhu", "satuan_id" => 8, "tipe" => "Float"],
            ["kode" => "Humid", "nama" => "Kelembaban", "satuan_id" => 9, "tipe" => "Float"],
            ["kode" => "Light", "nama" => "Intensitas Cahaya", "satuan_id" => 10, "tipe" => "Float"],
            ["kode" => "Acid", "nama" => "Keasaman", "satuan_id" => 11, "tipe" => "Float"],
            ["kode" => "Drainase", "nama" => "Pengairan", "satuan_id" => 12, "tipe" => "Boolean"],
            ["kode" => "Fertil", "nama" => "Pemupukan", "satuan_id" => 12, "tipe" => "Boolean"],
            ["kode" => "Pest", "nama" => "Hama", "satuan_id" => 12, "tipe" => "Boolean"],
            ["kode" => "Weed", "nama" => "Gulma", "satuan_id" => 12, "tipe" => "Boolean"],
        ]);

    }
}
