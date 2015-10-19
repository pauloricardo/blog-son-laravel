<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 19/10/2015
 * Time: 16:02
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index(){
        $posts = [
            [
                'título' => 'Primeiro Post',
                'autor' => 'Lorem ipsum',
                'data' => '14/10/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod pellentesque urna at porttitor. Sed eget imperdiet enim. Nulla rhoncus in ipsum a vehicula. Curabitur nec semper ex. Phasellus gravida nisl quis tortor aliquam, a tristique dui tempus. Donec tincidunt ornare cursus. Donec arcu sem, rutrum id interdum vitae, ornare sit amet ex. Mauris bibendum lectus elit, non rutrum diam ullamcorper vitae. Vivamus non lacinia ipsum. Curabitur pulvinar leo venenatis ex finibus bibendum. Integer nec sapien elit. Aenean luctus urna vel fermentum pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;'
            ],
            [
                'título' => 'Segundo Post',
                'autor' => 'Lorem ipsum',
                'data' => '14/10/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod pellentesque urna at porttitor. Sed eget imperdiet enim. Nulla rhoncus in ipsum a vehicula. Curabitur nec semper ex. Phasellus gravida nisl quis tortor aliquam, a tristique dui tempus. Donec tincidunt ornare cursus. Donec arcu sem, rutrum id interdum vitae, ornare sit amet ex. Mauris bibendum lectus elit, non rutrum diam ullamcorper vitae. Vivamus non lacinia ipsum. Curabitur pulvinar leo venenatis ex finibus bibendum. Integer nec sapien elit. Aenean luctus urna vel fermentum pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;'
            ],
            [
                'título' => 'Terceiro Post',
                'autor' => 'Lorem ipsum',
                'data' => '14/10/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod pellentesque urna at porttitor. Sed eget imperdiet enim. Nulla rhoncus in ipsum a vehicula. Curabitur nec semper ex. Phasellus gravida nisl quis tortor aliquam, a tristique dui tempus. Donec tincidunt ornare cursus. Donec arcu sem, rutrum id interdum vitae, ornare sit amet ex. Mauris bibendum lectus elit, non rutrum diam ullamcorper vitae. Vivamus non lacinia ipsum. Curabitur pulvinar leo venenatis ex finibus bibendum. Integer nec sapien elit. Aenean luctus urna vel fermentum pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;'
            ],
            [
                'título' => 'Quarto Post',
                'autor' => 'Lorem ipsum',
                'data' => '14/10/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod pellentesque urna at porttitor. Sed eget imperdiet enim. Nulla rhoncus in ipsum a vehicula. Curabitur nec semper ex. Phasellus gravida nisl quis tortor aliquam, a tristique dui tempus. Donec tincidunt ornare cursus. Donec arcu sem, rutrum id interdum vitae, ornare sit amet ex. Mauris bibendum lectus elit, non rutrum diam ullamcorper vitae. Vivamus non lacinia ipsum. Curabitur pulvinar leo venenatis ex finibus bibendum. Integer nec sapien elit. Aenean luctus urna vel fermentum pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;'
            ],
            [
                'título' => 'Quinto Post',
                'autor' => 'Lorem ipsum',
                'data' => '14/10/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod pellentesque urna at porttitor. Sed eget imperdiet enim. Nulla rhoncus in ipsum a vehicula. Curabitur nec semper ex. Phasellus gravida nisl quis tortor aliquam, a tristique dui tempus. Donec tincidunt ornare cursus. Donec arcu sem, rutrum id interdum vitae, ornare sit amet ex. Mauris bibendum lectus elit, non rutrum diam ullamcorper vitae. Vivamus non lacinia ipsum. Curabitur pulvinar leo venenatis ex finibus bibendum. Integer nec sapien elit. Aenean luctus urna vel fermentum pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;'
            ],
            [
                'título' => 'Sexto Post',
                'autor' => 'Lorem ipsum',
                'data' => '14/10/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod pellentesque urna at porttitor. Sed eget imperdiet enim. Nulla rhoncus in ipsum a vehicula. Curabitur nec semper ex. Phasellus gravida nisl quis tortor aliquam, a tristique dui tempus. Donec tincidunt ornare cursus. Donec arcu sem, rutrum id interdum vitae, ornare sit amet ex. Mauris bibendum lectus elit, non rutrum diam ullamcorper vitae. Vivamus non lacinia ipsum. Curabitur pulvinar leo venenatis ex finibus bibendum. Integer nec sapien elit. Aenean luctus urna vel fermentum pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;'
            ],
            [
                'título' => 'Sétimo Post',
                'autor' => 'Lorem ipsum',
                'data' => '14/10/2015',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod pellentesque urna at porttitor. Sed eget imperdiet enim. Nulla rhoncus in ipsum a vehicula. Curabitur nec semper ex. Phasellus gravida nisl quis tortor aliquam, a tristique dui tempus. Donec tincidunt ornare cursus. Donec arcu sem, rutrum id interdum vitae, ornare sit amet ex. Mauris bibendum lectus elit, non rutrum diam ullamcorper vitae. Vivamus non lacinia ipsum. Curabitur pulvinar leo venenatis ex finibus bibendum. Integer nec sapien elit. Aenean luctus urna vel fermentum pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;'
            ]
        ];
        return view('home.index',['posts'=>$posts]);
    }
    public function about(){
        return view('home.about');
    }

    public function contact(){
        return view('home.contact');
    }
}