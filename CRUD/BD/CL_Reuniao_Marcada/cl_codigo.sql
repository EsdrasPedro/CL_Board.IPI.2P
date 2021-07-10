CREATE TABLE CL_USUARIO(
	ID INT NOT NULL AUTO_INCREMENT,
	NOME VARCHAR(60) NOT NULL,
	SOBRENOME VARCHAR(60) NOT NULL,
	DATA_DE_NASCIMENTO DATE NOT NULL,
	GENERO VARCHAR(10) NOT NULL,
	N_CELULAR VARCHAR(11) NOT NULL,
	TIPO_USUARIO VARCHAR(1) NOT NULL,
	MATRICULA VARCHAR(35) NOT NULL,
	E_MAIL VARCHAR(60) NOT NULL,
	SENHA VARCHAR(60) NOT NULL,
	CONSTRAINT USU_PK PRIMARY KEY (ID));
    
    CREATE TABLE CL_CURSO(
	ID INT NOT NULL AUTO_INCREMENT,
    DESC_CURSO VARCHAR(60) NOT NULL,
    CONSTRAINT CUR_ID PRIMARY KEY (ID));
    
    CREATE TABLE CL_DISCIPLINA(
	CÓDIGO INT NOT NULL AUTO_INCREMENT,
    CODIGO VARCHAR(45) NOT NULL,
    NOME VARCHAR(60) NOT NULL,
    CUR_ID INT NOT NULL,
    CONSTRAINT DIS_PK PRIMARY KEY (CÓDIGO),
    CONSTRAINT DIS_CUR_FK FOREIGN KEY (CUR_ID) REFERENCES CL_CURSO (ID));
    
    CREATE TABLE CL_DISCIPLINA_OFERTADA(
	ID INT NOT NULL AUTO_INCREMENT,
    ANO VARCHAR(4) NOT NULL,
    SEMESTRE VARCHAR(1) NOT NULL,
    COR_DISC VARCHAR (45) NOT NULL,
    DIS_CÓDIGO INT NOT NULL,
    USU_ID_PROFESSOR INT NOT NULL,
    CONSTRAINT DIO_PK PRIMARY KEY (ID),
    CONSTRAINT DIO_USU_FK FOREIGN KEY (USU_ID_PROFESSOR) REFERENCES CL_USUARIO (ID));
    
    CREATE TABLE CL_REUNIÃO_MARCADA(
	ID INT NOT NULL AUTO_INCREMENT,
    NOME VARCHAR(60) NOT NULL,
    DATA_H_INICIO DATETIME NOT NULL,
    DATA_H_FIM DATETIME NOT NULL,
	DIO_ID INT NOT NULL,
    CONSTRAINT REU_PK PRIMARY KEY (ID),
    CONSTRAINT REU_DIO_FK FOREIGN KEY (DIO_ID) REFERENCES CL_DISCIPLINA_OFERTADA (ID));	
    
    CREATE TABLE CL_MATRICULA(
	USU_ID INT NOT NULL,
    DIO_ID INT NOT NULL,
    CONSTRAINT MA_USU_FK FOREIGN KEY (USU_ID) REFERENCES CL_USUARIO (ID),
    CONSTRAINT MA_DIO_FK FOREIGN KEY (DIO_ID) REFERENCES CL_DISCIPLINA_OFERTADA (ID));