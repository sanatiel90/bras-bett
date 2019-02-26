@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="font-size: 1.1rem">Bem vindo, <strong>{{ Auth::user()->name }} </strong>! Você até agora acumulou um total de <strong style="font-size: 1.6rem">{{ Auth::user()->points }}</strong> pontos!</p>                   


                    <!-- card com os jogos da proxima rodada -->
                    <div class="card" style="margin-top: 10px">
                       <div class="card-header">Próxima rodada - 1ª Rodada</div>   
                       <div class="card-body">
                          <div class="row justify-content-center"> 
                           
                         <!-- forelse -->
                          <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                                   <div class="col-xs-12">
                                    <p class="card-text text-center"  style="font-size: 0.8rem; font-weight: bolder;">05/04/2019 - São Januário </p>
                                   </div>
                                   <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">
                                        VAS
                                      </span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                          <img src="/images/escudo-vasco.gif" class="img-responsive" height="40px" >
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">
                                          0
                                      </span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">
                                          0
                                      </span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                       
                                          <img src="/images/escudo-csa.gif" class="img-responsive" height="28rem" width="40rem">
                                        
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">
                                        CSA
                                    </span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Status:</strong> A jogar</div>
                                   </div>

                                   <div class="row justify-content-center " >
                                     <div class="col-xs" style="width: 100%;"><a href="#" class="btn btn-success btn-md btn-block"><strong>Aposte nesse jogo!</strong> </a></div>
                                   </div>    
                                  
                               </div>  <!-- card-body -->
                           </div> <!-- card -->
                           </div> <!-- col-sm -->


                            <!-- jogo 2 -->

                            <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                                   <div class="col-xs-12">
                                    <p class="card-text text-center"  style="font-size: 0.8rem; font-weight: bolder;">05/04/2019 - São Januário </p>
                                   </div>
                                   <div class="col-xs-12">
                                    <p class="card-text text-center" style="font-size: 0.8rem; font-weight: bolder;">1ª Rodada</p>
                                   </div>
                                   <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">
                                        VAS
                                      </span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                          <img src="/images/escudo-vasco.gif" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">
                                          0
                                      </span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">
                                          0
                                      </span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                       
                                          <img src="/images/escudo-csa.gif" class="img-responsive" height="28rem" width="40rem">
                                        
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">
                                        CSA
                                    </span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Status:</strong> A jogar</div>
                                   </div>

                                   <div class="row justify-content-center " >
                                     <div class="col-xs" style="width: 100%;"><a href="#" class="btn btn-success btn-md btn-block"><strong>Aposte nesse jogo!</strong> </a></div>
                                   </div>    
                                  
                               </div>  <!-- card-body -->
                           </div> <!-- card -->
                           </div> <!-- col-sm -->

                            <!-- end jogo 2 --> 

                            <!-- jogo 2 -->

                            <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                                   <div class="col-xs-12">
                                    <p class="card-text text-center"  style="font-size: 0.8rem; font-weight: bolder;">05/04/2019 - São Januário </p>
                                   </div>
                                   <div class="col-xs-12">
                                    <p class="card-text text-center" style="font-size: 0.8rem; font-weight: bolder;">1ª Rodada</p>
                                   </div>
                                   <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">
                                        VAS
                                      </span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                          <img src="/images/escudo-vasco.gif" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">
                                          0
                                      </span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">
                                          0
                                      </span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                       
                                          <img src="/images/escudo-csa.gif" class="img-responsive" height="28rem" width="40rem">
                                        
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">
                                        CSA
                                    </span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Status:</strong> A jogar</div>
                                   </div>

                                   <div class="row justify-content-center " >
                                     <div class="col-xs" style="width: 100%;"><a href="#" class="btn btn-success btn-md btn-block"><strong>Aposte nesse jogo!</strong> </a></div>
                                   </div>    
                                  
                               </div>  <!-- card-body -->
                           </div> <!-- card -->
                           </div> <!-- col-sm -->

                            <!-- end jogo 2 --> 

                            <!-- jogo 2 -->

                            <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                                   <div class="col-xs-12">
                                    <p class="card-text text-center"  style="font-size: 0.8rem; font-weight: bolder;">05/04/2019 - São Januário </p>
                                   </div>
                                   <div class="col-xs-12">
                                    <p class="card-text text-center" style="font-size: 0.8rem; font-weight: bolder;">1ª Rodada</p>
                                   </div>
                                   <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">
                                        VAS
                                      </span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                          <img src="/images/escudo-vasco.gif" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">
                                          0
                                      </span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">
                                          0
                                      </span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                       
                                          <img src="/images/escudo-csa.gif" class="img-responsive" height="28rem" width="40rem">
                                        
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">
                                        CSA
                                    </span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Status:</strong> A jogar</div>
                                   </div>

                                   <div class="row justify-content-center " >
                                     <div class="col-xs" style="width: 100%;"><a href="#" class="btn btn-success btn-md btn-block"><strong>Aposte nesse jogo!</strong> </a></div>
                                   </div>    
                                  
                               </div>  <!-- card-body -->
                           </div> <!-- card -->
                           </div> <!-- col-sm -->

                            <!-- end jogo 2 --> 

                            <!-- jogo 2 -->

                            <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                                   <div class="col-xs-12">
                                    <p class="card-text text-center"  style="font-size: 0.8rem; font-weight: bolder;">05/04/2019 - São Januário </p>
                                   </div>
                                   <div class="col-xs-12">
                                    <p class="card-text text-center" style="font-size: 0.8rem; font-weight: bolder;">1ª Rodada</p>
                                   </div>
                                   <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">
                                        VAS
                                      </span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                          <img src="/images/escudo-vasco.gif" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">
                                          0
                                      </span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">
                                          0
                                      </span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                       
                                          <img src="/images/escudo-csa.gif" class="img-responsive" height="28rem" width="40rem">
                                        
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">
                                        CSA
                                    </span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Status:</strong> A jogar</div>
                                   </div>

                                   <div class="row justify-content-center " >
                                     <div class="col-xs" style="width: 100%;"><a href="#" class="btn btn-success btn-md btn-block"><strong>Aposte nesse jogo!</strong> </a></div>
                                   </div>    
                                  
                               </div>  <!-- card-body -->
                           </div> <!-- card -->
                           </div> <!-- col-sm -->

                            <!-- end jogo 2 --> 


                        <!-- empty -->


                        <!-- endforelse -->   
                       

                         </div> <!-- row main --> 

                         <div class="row justify-content-end ">
                           <div class="col-xs" style="margin-top: 10px;"><a href="#" class="btn btn-primary">Ver todos os jogos</a></div>
                         </div>

                       </div> <!-- card-body main -->
                  </div> <!-- card jogos dia -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
