<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./Assets/Css/CL_U.css" rel="stylesheet">
    <title>Criar Conta CL Board</title>
</head>
<body class="bg-light">
  
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <h2>CL Board</h2>
        <p class="lead">Serviço de organização de reuniões por vídeo para instituições de ensino, empresas e outros grupos. <br>O CL Board foi projetado tendo como base o Google Classroom e o Kanban, contendo características de ambos, visando facilidade e informação.</p>
      </div>

        <div class="col-md-7 col-lg-8 wrapper">
          <h4 class="mb-3">Criar Conta</h4>
          <form action="./Auth/User/Save.php" method="POST" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label">Nome</label>
                <input type="text" class="input-field" name="fName" placeholder="Nome" required>
                <div class="invalid-feedback">O primeiro nome válido é obrigatório.</div>
              </div>
  
              <div class="col-sm-6">
                <label class="form-label">Sobrenome</label>
                <input type="text" class="input-field" name="lName" placeholder="Sobrenome" required>
                <div class="invalid-feedback">O sobrenome nome válido é obrigatório.</div>
              </div>
  
              <div class="col-md-4">
                <label class="form-label">Gênero</label>
                <select class="form-select" name="country" required>
                  <option selected disabled value="">Escolher...</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Feminino">Feminino</option>
                </select>
                <div class="invalid-feedback">Por favor, selecione um estado válido.</div>
              </div>
  
              <div class="col-md-4">
                <label class="form-label">Celular</label>
                <input type="text" class="input-field" name="Celular" placeholder="00000-0000" required>
                <div class="invalid-feedback">Um número válido é obrigatório.</div>
              </div>

              <div class="col-md-4">
                <label class="form-label">Nascimento</label>
                <input type="date" class="input-field" name="Nascimento" placeholder="DD/MM/AAAA" required>
              </div>

              <div class="col-md-6">
                <label class="form-label">Tipo de usuário</label>
                <select class="form-select" name="country2" required>
                  <option selected disabled value="">Escolher...</option>
                  <option value="Aluno">Aluno(a)</option>
                  <option value="Professor">Professor(a)</option>
                </select>
                <div class="invalid-feedback">Por favor, selecione um estado válido.</div>
              </div>

              <div class="col-md-6">
                <label class="form-label">Matrícula</label>
                <input type="text" class="input-field" name="Matricula" required>
              </div>

              <div class="col-12">
                <label class="form-label">E-mail</label>
                <input type="email" class="input-field" name="email" aria-describedby="email1Help" placeholder="name@example.com" required>
                <div name="email1Help" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém.</div>
                <div class="invalid-feedback">Por favor, insira um endereço de e-mail válido para atualizações de envio.</div>
              </div>
  
              <div class="col-12">
                <label class="form-label">Senha</label>
                <input type="password" class="input-field" name="password1" aria-describedby="passwordHelpBlock" placeholder="Senha" required>
                <div name="password1Help" class="form-text">Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não conter espaços, caracteres especiais ou emojis.</div>
                <div class="invalid-feedback">Por favor, insira uma senha válido.</div>
              </div>
  
              <div class="col-12">
                <label class="form-label">Repetir senha</label>
                <input type="password" class="input-field" name="password2" placeholder="Senha" required>
                <div class="invalid-feedback">Por favor, insira uma senha válido.</div>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="same-address">
                <label class="form-check-label">Quero receber informações pelo e-mail cadastrado.</label>
              </div>
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="save-info">
                <label class="form-check-label">Quero receber notificações pelo WhatsApp.</label>
              </div>

              <div class="var1"></div>
  
            <button class="input-submit" type="submit">Finalizar</button>
          </form>
        </div>
      </div>

      <div class="var">
          
      </div>

    </main>

  </div>
</body>
</html>