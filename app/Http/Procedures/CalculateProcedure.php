<?php

declare(strict_types=1);

namespace App\Http\Procedures;

use App\Models\Persegi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Sajya\Server\Procedure;

class CalculateProcedure extends Procedure
{
    /**
     * The name of the procedure that is used for referencing.
     *
     * @var string
     */
    public static string $name = 'math';

    /**
     * Execute the procedure.
     *
     * @param Request $request
     *
     * @return array|string|integer
     */
    public function handle(Request $request)
    {
        $waktuSekarang = Carbon::now('Asia/Jakarta')->format('H:i:s.v');
        $waktuKirim = Carbon::createFromFormat('H:i:s.v', $request->get('waktu_kirim'));
        $kalkulasi = $waktuKirim->floatDiffInSeconds($waktuSekarang);
        $latensi = Carbon::createFromTimestampUTC($kalkulasi)->format('H:i:s.v');

        $luas = $request->get('panjang') * $request->get('lebar');
        $keliling = 2 * ($request->get('panjang') + $request->get('lebar'));

        Persegi::create([
            'panjang' => $request->get('panjang'),
            'lebar' => $request->get('lebar'),
            'luas' => $luas,
            'keliling' => $keliling,
            'latensi' => $latensi,
            'pitch' => $request->get('pitch'),
            'yaw' => $request->get('yaw'),
            'roll' => $request->get('roll'),
            'waktu_kirim' => $waktuKirim->format('H:i:s.v')
        ]);

        return [
            'pitch' => $request->get('pitch'),
            'yaw' => $request->get('yaw'),
            'roll' => $request->get('roll'),
            'luas' => $luas,
            'keliling' => $keliling,
            'waktu_terikirim' => now('Asia/Jakarta')->format('H:i:s.v'),
            'latensi' => $latensi
        ];
    }

    public function all()
    {
        $persegis = Persegi::all();

        return $persegis;
    }
}
