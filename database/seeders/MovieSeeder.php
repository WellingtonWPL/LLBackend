<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                
        DB::table('Movie')->insert(
            [
                'nome' => 'Bela Vingança',
                'titulo' => 'Promising Young Woman',
                'ano' => 2020,
                'categorias' => 'Crime, Drama, Mistério',
                'duracao' => '1h 53m',
                'sinopse' => 'Uma jovem traumatizada por um trágico acontecimento do seu passado busca vingança 
                              contra aqueles que cruzam seu caminho.',
                'elenco' => 'Carey Mulligan, Bo Burnham, Alison Brie',
                'premios' => 'Oscar de Melhor Roteiro Original',
                'diretor' => 'Emerald Fennell',
                'avaliacao' => '7.5/10',
                'trailer' => 'https://www.imdb.com/video/vi2072690969?playlistId=tt9620292&ref_=tt_ov_vi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => env('DB_USERNAME', 'ADMIN')
            ]
        );

        DB::table('Movie')->insert(
            [
                'nome' => 'Ela',
                'titulo' => 'Her',
                'ano' => 2013,
                'categorias' => 'Drama, Romance, Sci-Fi',
                'duracao' => '2h6m',
                'sinopse' => 'Num futuro cercano, um solitário escritor tem uma pouco normal relação 
                              com um sistema operativo destinado a cumprir todas sus necessidades.',
                'elenco' => 'Joaquin Phoenix, AmyAdams, ScarlettJohansson',
                'premios' => 'Oscar de Melhor Roteiro Original, Prêmio Globo de Ouro: Melhor Roteiro de Cinema',
                'diretor' => 'Spike Jonze',
                'avaliacao' => '8.0/10',
                'trailer' => 'https://www.imdb.com/video/vi4112492569?playlistId=tt1798709&ref_=tt_ov_vi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => env('DB_USERNAME', 'ADMIN')
            ]
        );

        DB::table('Movie')->insert(
            [
                'nome' => 'Um Lugar Silencioso',
                'titulo' => 'A Quiet Place',
                'ano' => 2018,
                'categorias' => 'Drama, Horror, Sci-Fi',
                'duracao' => '1h 30m',
                'sinopse' => 'Em um mundo pós-apocalíptico, uma família é forçada a viver em silêncio enquanto se esconde de monstros com audição ultra-sensível.',
                'elenco' => 'Emily Blunt, John Krasinski, Millicent Simmonds',
                'premios' => '',
                'diretor' => 'John Krasinski',
                'avaliacao' => '7.5/10',
                'trailer' => 'https://www.imdb.com/video/vi3446716441?playlistId=tt6644200&ref_=tt_ov_vi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => env('DB_USERNAME', 'ADMIN')
            ]
        );

        DB::table('Movie')->insert(
            [
                'nome' => 'Star Wars: A Ascensão Skywalker',
                'titulo' => 'Star Wars: Episode IX -The Rise of Skywalker',
                'ano' => 2012,
                'categorias' => 'Ação, Aventura, Fantasia',
                'duracao' => '2h 21m',
                'sinopse' => 'A resistência sobrevivente enfrenta a Primeira Ordem mais uma vez no último capítulo da saga Skywalker.',
                'elenco' => 'Daisy Ridley, John Boyega, Oscar Isaac',
                'premios' => '',
                'diretor' => 'J.J. Abrams',
                'avaliacao' => '6.5/10',
                'trailer' => 'https://www.imdb.com/video/vi518503961?playlistId=tt2527338&ref_=tt_ov_vi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => env('DB_USERNAME', 'ADMIN')
            ]
        );

        DB::table('Movie')->insert(
            [
                'nome' => 'Jojo Rabbit',
                'titulo' => 'Jojo Rabbit',
                'ano' => 2019,
                'categorias' => 'Comédia, Drama, Guerra',
                'duracao' => '1h 48m',
                'sinopse' => 'Um jovem parte do exército nazi, descobre que sua mãe esconde uma jovem judia na sua casa.',
                'elenco' => 'Roman Griffin Davis, Thomasin McKenzie, Scarlett Johansson',
                'premios' => 'Oscar de Melhor Roteiro Adaptado',
                'diretor' => 'Taika Waititi',
                'avaliacao' => '7.9/10',
                'trailer' => 'https://www.imdb.com/video/vi2663366425?playlistId=tt2584384&ref_=tt_ov_vi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => env('DB_USERNAME', 'ADMIN')
            ]
        );

        DB::table('Movie')->insert(
            [
                'nome' => 'Viúva Negra',
                'titulo' => 'Black Widow',
                'ano' => 2021,
                'categorias' => 'Ação, Aventura, Sci-Fi',
                'duracao' => '2h 14m',
                'sinopse' => 'As aventuras da Viúva Negra.',
                'elenco' => 'Scarlett Johansson, Florence Pugh, David Harbour',
                'premios' => '',
                'diretor' => 'Cate Shortland',
                'avaliacao' => '6.7/10',
                'trailer' => 'https://www.imdb.com/video/vi645185561?playlistId=tt3480822&ref_=tt_ov_vi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => env('DB_USERNAME', 'ADMIN')
            ]
        );
        
    }
}
