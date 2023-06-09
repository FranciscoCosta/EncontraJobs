@extends('layouts.main')

@section('title', 'Cadastrar vaga')

@section('content')

    <div class="CreateJob">
        <div class="CreateJob__container">
            <h1>Criar uma nova vaga</h1>
            <form action="/jobs" method="POST">
                @csrf
                <div class="Form__left">
                    <h4>Dados da empresa:</h4>
                    <div class="CreateJobs_input">
                        <label for="company">Nome da empresa:</label>
                        <input type="text" name="company" id="company" placeholder="Nome da empresa ...">
                    </div>
                    <div class="CreateJobs_input">
                        <label for="email">Email da empresa:</label>
                        <input type="text" name="email" id="email" placeholder="Nome da empresa ...">
                    </div>
                    <div class="CreateJobs_input">
                        <label for="phone">Número da empresa:</label>
                        <input type="text" name="phone" id="phone" placeholder="Número da empresa ...">
                    </div>
                    <div class="CreateJobs_input">
                        <label for="website">Site da empresa:</label>
                        <input type="text" name="website" id="website" placeholder="Website da empresa ...">
                    </div>
                    <div class="CreateJobs_input">
                        <label for="workplace">Lugar da vaga:</label>
                        <input type="text" name="workplace" id="workplace" placeholder="Lugar da vaga ..."/>
                    </div>
                    <button type="sumbit">Adicionar vaga</button>
                </div>
                <div class="Form__right">
                    
                    <h4>Dados da vaga:</h4>
                    <div class="CreateJobs_input">
                        <label for="title">Titulo:</label>
                        <input type="text" name="title" id="title" placeholder="Nome da vaga ...">
                    </div>
                    <div class="CreateJobs_input">
                        <label for="description">Descrição:</label>
                        <textarea type="text" name="description" id="description" placeholder="Descrição da vaga ..." ></textarea> 
                    </div>
                    <div class="CreateJobs_input">
                        <label for="salary">Salário:</label>
                        <input type="number" name="salary" id="salary" placeholder="Salário da vaga ..."/>
                    </div>
                    <div class="CreateJobs_input">
                        <label for="workschedule">Horário:</label>
                        <input type="text" name="workschedule" id="workschedule" placeholder="Horário da vaga ..."/>
                    </div>
                    <div class="CreateJobs_input">
                        <label for="workmodel">Modelo Trabalho:</label>
                        <select name="workmodel" id="workmodel">
                            <option value="home">Remoto</option>
                            <option value="hybrid">Híbrido</option>
                            <option value="inperson">Presencial</option>
                        </select>
                
                </div>
            
            </form>
        </div>


    </div>
@endsection
