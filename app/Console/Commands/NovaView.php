<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NovaView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria uma nova View';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       $view = $this->argument('view');// variaval recebe o argumento criado
       $fp = fopen(resource_path()."\\views\\".$view.".blade.php","w+");// fopen criar um arquivo e "w+" acresentar informação ao arquivo
       fputs($fp, "{{ -- nova view ---}}");//função para acresentar comentários
       fclose($fp);  // fecha a variavel
       $this->info("View {$view} criada com sucesso!" .\app_path()); //Colocar uma mensagem para usuario
       
    }
}
