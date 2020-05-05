<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Spicycomm | Spicyweb';
        $data['description'] = 'Olá, somos a Spicycomm: uma agência de publicidade com 18 anos de muitas histórias no Brasil e em Angola. Acesse nosso site e conheça todas elas.';
        $data['keywords'] = 'propaganda, publicidade, agência de publicidade, propaganda em são paulo, spicycomm, spicyweb, spicysports, spicydirect, agência spicy, Spicy, Comunicação, Publicidade, Propaganda, Design, Comunicar, Promoção, Agência, Marketing, Planejamento, Mídia, Criação, Negócios, Promover, Cliente, Arte, Soluções, Produto, Logotipo, Banner, Placa, Tabloide, Folheto, Produção, Layout, Orçamento, Mercado, Público, Resultados, Empreendimentos, Meeting, Lançamento, PP, Gráfica, Job, Pimenta, Especialidade, Profissional, Advertesing, Digital, Mobile, Stand, Plano, Online, Offline, Rede Social, Facebook, Twitter, Instagram, E-mail Marketing, Drone, Videos, Audiovisual, YouTube, Branding, Totem, Portfólio, Promover, Campanha, Peças, Marcas, Empresas, Consumidor, Mensagem, Tendências, Veicular, Veiculação, Crescimento, Outdoor, Briefing, Entretenimento';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }

}

/* Location: ./application/controllers/home.php */
