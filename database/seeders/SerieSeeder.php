<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Serie')->insert(
            [
                'nome' => 'Objetos Cortantes',
                'titulo' => 'Sharp Objects',
                'ano' => 2018,
                'categorias' => 'Crime, Drama, Mistério',
                'episodios' => 8,
                'temporadas' => 1,
                'sinopse' => 'Uma jornalista enfrenta seu passado sombrio quando 
                              precisa voltar para sua cidade natal para cobrir o assassinato de duas meninas.',
                'elenco' => 'Amy Adams, Patricia Clarkson, Chris Messina',
                'premios' => 'Prêmio Globo de Ouro: Melhor Atriz Coadjuvante em Televisão',
                'criador' => 'Marti Noxon',
                'avaliacao' => '8.1/10',
                'trailer' => 'https://www.imdb.com/video/vi2107423513?playlistId=tt2649356&ref_=tt_ov_vi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => env('DB_USERNAME', 'ADMIN')
            ]
        );

        DB::table('Serie')->insert(
            [
                'nome' => 'The Outsider',
                'titulo' => 'The Outsider',
                'ano' => 2020,
                'categorias' => 'Crime, Drama, Fantasiaepisodios',
                'episodios' => 10,
                'temporadas' => 1,
                'sinopse' => 'Os investigadores ficam confusos com um crime indescritível que foi cometido.',
                'elenco' => 'Ben Mendelsohn, Bill Camp, Jeremy Bobb',
                'premios' => '',
                'criador' => 'Richard Price',
                'avaliacao' => '7.7/10',
                'trailer' => 'https://www.imdb.com/video/vi790675225?playlistId=tt8550800&ref_=tt_ov_vi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => env('DB_USERNAME', 'ADMIN')
            ]
        );

        DB::table('Serie')->insert(
            [
                'nome' => 'The Crown',
                'titulo' => 'The Crown',
                'ano' => 2016,
                'categorias' => 'Biografia, Drama, História',
                'episodios' => 60,
                'temporadas' => 6,
                'sinopse' => 'Segue as rivalidades políticas e romance do reinado da rainha Elizabeth II 
                              e os eventos que moldaram a segunda metade do século 20.',
                'elenco' => 'Claire Foy, Olivia Colman, Imelda Staunton',
                'premios' => 'Prêmio Globo de Ouro: Melhor Série Dramática de TV(2021, 2017) e outros',
                'criador' => 'Peter Morgan',
                'avaliacao' => '8.6/10',
                'trailer' => 'https://www.imdb.com/video/vi1374667033?playlistId=tt4786824&ref_=tt_ov_vi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => env('DB_USERNAME', 'ADMIN')
            ]
        );

        DB::table('Serie')->insert(
            [
                'nome' => 'Chernobyl',
                'titulo' => 'Chernobyl',
                'ano' => 2019,
                'categorias' => 'Drama, História, Thriller',
                'episodios' => 5,
                'temporadas' => 1,
                'sinopse' => 'Minissérie em cinco partes que conta a história do pior acidente 
                              causado pelo homem na história, o desastre da Usina Nuclear de Chernobyl.',
                'elenco' => 'Jessie Buckley, Jared Harris, Stellan Skarsgård',
                'premios' => 'Prêmio Globo de Ouro: Melhor Minissérie ou Filme Feito para TV, Prêmio Globo de Ouro: Melhor Ator Coadjuvante em Série de TV, Minissérie ou Filme feito para Televisão',
                'criador' => 'Craig Mazin',
                'avaliacao' => '9.4/10',
                'trailer' => 'https://www.imdb.com/video/vi3724524825?playlistId=tt7366338&ref_=tt_ov_vi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => env('DB_USERNAME', 'ADMIN')
            ]
        );

        DB::table('Serie')->insert(
            [
                'nome' => 'Clarice',
                'titulo' => 'Clarice',
                'ano' => 2021,
                'categorias' => 'Crime, Drama, Mistério',
                'episodios' => 13,
                'temporadas' => 1,
                'sinopse' => 'Um ano depois de capturar o serial killer Bufallo Bill com a ajuda de Hannibal Lecter, a agente do FBI 
                              Clarice Starling retorna ao trabalho de campo, ainda tendo que lidar com as sequelas psicológicas de sua experiência anterior.',
                'elenco' => 'Rebecca Breeds, Michael Cudlitz, Jayne Atkinson',
                'premios' => '',
                'criador' => 'Alex Kurtzman, Jenny Lumet',
                'avaliacao' => '6.5/10',
                'trailer' => 'https://www.imdb.com/video/vi521126169?playlistId=tt2177268&ref_=tt_ov_vi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => env('DB_USERNAME', 'ADMIN')
            ]
        );

        DB::table('Serie')->insert(
            [
                'nome' => 'Ozark',
                'titulo' => 'Ozark',
                'ano' => 2017,
                'categorias' => 'Crime, Drama, Thriller',
                'episodios' => 30,
                'temporadas' => 3,
                'sinopse' => 'Um consultor financeiro arrasta sua família de Chicago para o Missouri, onde ele deve lavar uma grande quantidade em 
                              cinco anos para apaziguar um chefe do tráfico.',
                'elenco' => 'Jason Bateman, Laura Linney, Sofia Hublitz',
                'premios' => 'Prêmio Globo de Ouro: Melhor Atriz Coadjuvante em Televisão',
                'criador' => 'Bill Dubuque, Mark Williams',
                'avaliacao' => '8.4/10',
                'trailer' => 'https://www.imdb.com/video/vi149406489?playlistId=tt5071412&ref_=tt_ov_vi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => env('DB_USERNAME', 'ADMIN')
            ]
        );

        

        
    }
}
