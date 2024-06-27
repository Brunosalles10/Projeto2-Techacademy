
<div class="Contato">
        <div class="Contato-formulario">
            <h2>Entre em Contato</h2>

            <form class="text-area" name="form-cadastro" method="post" action="">
                <label for="">Digite seu nome: </label>
                <input class="input-select" type="text" name="nomeCompleto" id="nome" size="30" maxlength="40"
                    placeholder="Nome completo" autocomplete="off" required>
                <br>
                <label for="email">Digite seu email:</label>
                <input class="input-select" type="email" name="email" id="email" size="30" maxlength="50"
                    placeholder="Digite um email válido" autocomplete="off" required inputmode="email">
                <br>
                <label for="dataNascimento">Data Nascimento</label>
                <input class="input-select" type="date" name="dataNascimento" id="dataNascimento" autocomplete="off">
                <br>
                <label for="estadoCivil">Seu estado Civil:</label>
                <select name="estadoCivil">
                    <option value="">Selecione uma opção</option>
                    <option value="C">Casado</option>
                    <option value="S">Solteiro</option>
                </select>
                <br>

                <label for="genero">Selecione o sexo</label>
                <select name="genero">
                    <option value="">Selecione uma opção</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="N">Não informar</option>
                </select>
                <br>
                <label class="text-area" for="mensagem">Escreva sua mensagem</label>
                <textarea class="text-area" name="mensagem" id="mensagem" cols="120" rows="10" required
                    placeholder="Digite sua mensagem">

                </textarea>
                <br>



                <button type="submit" class="botao btn-form">
                    Enviar

                </button>
                <button type="reset" class="botao btn-form">
                    Redefinir

                </button>





            </form>

        </div>

</div>

    <!--Final area do menu principal-->