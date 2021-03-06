<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Spicycomm | Spicyweb';
        $data['description'] = 'Olá, somos a Spicycomm: uma agência de publicidade com 18 anos de muitas histórias no Brasil e em Angola. Acesse nosso site e conheça todas elas.';
        $data['keywords'] = 'propaganda, publicidade, agência de publicidade, propaganda em são paulo, spicycomm, spicyweb, spicysports, spicydirect, agência spicy, Spicy, Comunicação, Publicidade, Propaganda, Design, Comunicar, Promoção, Agência, Marketing, Planejamento, Mídia, Criação, Negócios, Promover, Cliente, Arte, Soluções, Produto, Logotipo, Banner, Placa, Tabloide, Folheto, Produção, Layout, Orçamento, Mercado, Público, Resultados, Empreendimentos, Meeting, Lançamento, PP, Gráfica, Job, Pimenta, Especialidade, Profissional, Advertesing, Digital, Mobile, Stand, Plano, Online, Offline, Rede Social, Facebook, Twitter, Instagram, E-mail Marketing, Drone, Videos, Audiovisual, YouTube, Branding, Totem, Portfólio, Promover, Campanha, Peças, Marcas, Empresas, Consumidor, Mensagem, Tendências, Veicular, Veiculação, Crescimento, Outdoor, Briefing, Entretenimento';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if($this->input->post('enviar_email') == "enviar"){
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.landingpagemodelo.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@landingpagemodelo.com.br","$nome"); //senha: xxxxxx
            $this->email->to('contato@landingpagemodelo.com.br');
            $this->email->cc('landingpagemodelo.com, paulobaronista@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Telefone:	{$telefone}<br/>
                        Mensagem:	{$mensagem}<br/>
                            </body></html>");

            if($this->email->send()){
                redirect('contato/obrigado');
            }else{
                redirect('contato/fail');
            }
        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado(){
        $data['title'] = 'Spicycomm | Spicyweb';
        $data['description'] = 'Olá, somos a Spicycomm: uma agência de publicidade com 18 anos de muitas histórias no Brasil e em Angola. Acesse nosso site e conheça todas elas.';
        $data['keywords'] = 'propaganda, publicidade, agência de publicidade, propaganda em são paulo, spicycomm, spicyweb, spicysports, spicydirect, agência spicy, Spicy, Comunicação, Publicidade, Propaganda, Design, Comunicar, Promoção, Agência, Marketing, Planejamento, Mídia, Criação, Negócios, Promover, Cliente, Arte, Soluções, Produto, Logotipo, Banner, Placa, Tabloide, Folheto, Produção, Layout, Orçamento, Mercado, Público, Resultados, Empreendimentos, Meeting, Lançamento, PP, Gráfica, Job, Pimenta, Especialidade, Profissional, Advertesing, Digital, Mobile, Stand, Plano, Online, Offline, Rede Social, Facebook, Twitter, Instagram, E-mail Marketing, Drone, Videos, Audiovisual, YouTube, Branding, Totem, Portfólio, Promover, Campanha, Peças, Marcas, Empresas, Consumidor, Mensagem, Tendências, Veicular, Veiculação, Crescimento, Outdoor, Briefing, Entretenimento';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail(){
        $data['title'] = 'Spicycomm | Spicyweb';
        $data['description'] = 'Olá, somos a Spicycomm: uma agência de publicidade com 18 anos de muitas histórias no Brasil e em Angola. Acesse nosso site e conheça todas elas.';
        $data['keywords'] = 'propaganda, publicidade, agência de publicidade, propaganda em são paulo, spicycomm, spicyweb, spicysports, spicydirect, agência spicy, Spicy, Comunicação, Publicidade, Propaganda, Design, Comunicar, Promoção, Agência, Marketing, Planejamento, Mídia, Criação, Negócios, Promover, Cliente, Arte, Soluções, Produto, Logotipo, Banner, Placa, Tabloide, Folheto, Produção, Layout, Orçamento, Mercado, Público, Resultados, Empreendimentos, Meeting, Lançamento, PP, Gráfica, Job, Pimenta, Especialidade, Profissional, Advertesing, Digital, Mobile, Stand, Plano, Online, Offline, Rede Social, Facebook, Twitter, Instagram, E-mail Marketing, Drone, Videos, Audiovisual, YouTube, Branding, Totem, Portfólio, Promover, Campanha, Peças, Marcas, Empresas, Consumidor, Mensagem, Tendências, Veicular, Veiculação, Crescimento, Outdoor, Briefing, Entretenimento';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/contato.php */
