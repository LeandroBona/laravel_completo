<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
{
    $featuredPosts = [
        ['title' => 'Bem-vindo ao Nosso Website', 'content' => 'Explorando as melhores soluções para você.'],
        ['title' => 'Novidades', 'content' => 'Fique por dentro das últimas novidades e atualizações do setor.'],
        ['title' => 'Destaques', 'content' => 'Veja os projetos que estamos trabalhando atualmente.'],
    ];

    return view('pages.home', compact('featuredPosts'));
}

public function about()
{
    $teamMembers = [
        ['name' => 'Leandro Bona', 'role' => 'Coordenador', 'bio' => 'Responsável pelo desenvolvimento de projetos inovadores.'],
        ['name' => 'Thais Stanchack', 'role' => 'Desenvolvedora', 'bio' => 'Especialista em desenvolvimento de software e tecnologias web.'],
        ['name' => 'Luiz Henrique Bonin', 'role' => 'Designer', 'bio' => 'Criador de interfaces atraentes e intuitivas.'],
    ];

    return view('pages.about', compact('teamMembers'));
}

    public function services() {
        $services = [
            ['name' => 'Desenvolvimento Web', 'description' => 'Criação de sites responsivos e sistemas web.'],
            ['name' => 'Design Gráfico', 'description' => 'Design de logos, banners e materiais gráficos.'],
            ['name' => 'Consultoria', 'description' => 'Consultoria especializada em TI e desenvolvimento.'],
        ];
    
        return view('pages.services', compact('services'));
    }

    public function contact()
{
    $contactInfo = [
        'address' => '123 Rua Principal, Centro, Cidade XYZ',
        'email' => 'contato@empresa.com',
        'phone' => '(99) 9999-9999',
    ];

    return view('pages.contact', compact('contactInfo'));
}

    public function dashboard() {
        return view('admin.dashboard');
    }
}
