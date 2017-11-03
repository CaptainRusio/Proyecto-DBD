/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     30/10/2017 18:21:21                          */
/*==============================================================*/

drop table if exists CATASTROFE;

drop table if exists COMUNA;

drop table if exists HISTORIAL_USUARIO;

drop table if exists MEDIDA;

drop table if exists PROVINCIA;

drop table if exists REGION;

drop table if exists REGISTRO_CATASTROFES;

drop table if exists REGISTRO_MEDIDA;

drop table if exists RNV;

drop table if exists ROL;

drop table if exists USUARIO;

drop table if exists USUARIO_ROL;

drop table if exists USUARIO_REGISTROMEDIDA;

drop table if exists REGISTROMEDIDA_REGISTROCAGASTROFE;

/*==============================================================*/
/* Table: REGISTRO_CATASTROFES                                  */
/*==============================================================*/
create table REGISTRO_CATASTROFE (
   ID_REGISTRO_CATASTROFE VARCHAR(1024)        primary key,
   FECHA_INICIO         DATE                 null,
   FECHA_TERMINO        DATE                 null,
   COSTO_TOTAL          INTEGER                  null,
   PORCENTAJE_PROGRESO  INTEGER                  null,
   NOMBRE               VARCHAR(1024)        null
);

/*==============================================================*/
/* Table: REGISTRO_MEDIDA                                       */
/*==============================================================*/
create table REGISTRO_MEDIDA (
   ID_REGISTRO_MEDIDA   VARCHAR(1024)        primary key,
   FECHA_INICIO         DATE                 null,
   FECHA_TERMINO        DATE                 null,
   VALOR_COSTO          INTEGER           	 null,
   PORCENTAJE_PROGRESO  INTEGER                  null,
   NOMBRE               VARCHAR(1024)        null
);

/*==============================================================*/
/* Table: MEDIDA                                                */
/*==============================================================*/
create table MEDIDA (
   ID_MEDIDA            VARCHAR(1024)        primary key,
   NOMBRE_MEDIDA        VARCHAR(1024)        null,
   ID_REGISTRO_MEDIDA 	VARCHAR(1024) REFERENCES REGISTRO_MEDIDA(ID_REGISTRO_MEDIDA)
);
/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO (
   ID_USUARIO           VARCHAR(1024)        primary key,
   CORREO_ELECTRONICO   VARCHAR(1024)        null,
   NOMBRE_USUARIO       VARCHAR(254)         null,
   CONTRASENA_USUARIO   VARCHAR(1024)        null,
   ID_MEDIDA 	VARCHAR(1024) REFERENCES MEDIDA(ID_MEDIDA)

);


/*==============================================================*/
/* Table: CATASTROFE                                            */
/*==============================================================*/
create table CATASTROFE (
   ID_CATASTROFE        VARCHAR(1024)        primary key,
   NOMBRE_CATASTROFE    VARCHAR(1024)        null,
   ID_REGISTRO_CATASTROFE	VARCHAR(1024) REFERENCES REGISTRO_CATASTROFE(ID_REGISTRO_CATASTROFE)

);

/*==============================================================*/
/* Table: COMUNA                                                */
/*==============================================================*/
create table COMUNA (
   ID_COMUNA            VARCHAR(1024)        primary key,
   NOMBRE               VARCHAR(1024)        null,
   UBICACION            VARCHAR(1024)        null,
   ID_CATASTROFE	VARCHAR(1024) REFERENCES CATASTROFE(ID_CATASTROFE)

);

/*==============================================================*/
/* Table: HISTORIAL_USUARIO                                     */
/*==============================================================*/
create table HISTORIAL_USUARIO (
   ID_HISTORIAL_USUARIO VARCHAR(1024)        primary key,
   FECHA_ACCION         DATE                 null,
   DESCRIPCION          VARCHAR(1024)        null,
   ID_USUARIO	VARCHAR(1024) REFERENCES USUARIO(ID_USUARIO)

);

/*==============================================================*/
/* Table: PROVINCIA                                             */
/*==============================================================*/
create table PROVINCIA (
   ID_PROVINCIA         VARCHAR(1024)        primary key,
   NOMBRE               VARCHAR(1024)        null,
   UBICACION            VARCHAR(1024)        null,
   ID_COMUNA 	VARCHAR(1024) REFERENCES COMUNA(ID_COMUNA)

);

/*==============================================================*/
/* Table: REGION                                                */
/*==============================================================*/
create table REGION (
   ID_REGION            CHAR(10)             primary key,
   NOMBRE               VARCHAR(1024)        null,
   UBICACION            VARCHAR(1024)        null,
   ID_PROVINCIA	VARCHAR(1024) REFERENCES PROVINCIA(ID_PROVINCIA)

);


/*==============================================================*/
/* Table: RNV                                                   */
/*==============================================================*/
create table RNV (
   ID_RNV               VARCHAR(1024)        primary key,
   CANTIDAD             INTEGER                 null,
   ID_USUARIO 	VARCHAR(1024) REFERENCES USUARIO(ID_USUARIO)

);

/*==============================================================*/
/* Table: ROL                                                   */
/*==============================================================*/
create table ROL (
   ID_ROL               VARCHAR(1024)        primary key,
   NOMBRE_ROL           VARCHAR(1024)        null
);

/*==============================================================*/
/* Table: USUARIO_ROL                                               */
/*==============================================================*/
create table USUARIO_ROL (
   ID_USUARIO 	VARCHAR(1024) REFERENCES USUARIO(ID_USUARIO),
   ID_ROL 	VARCHAR(1024) REFERENCES ROL(ID_ROL)
);

/*==============================================================*/
/* Table: USUARIO_REGISTROMEDIDA                                               */
/*==============================================================*/
create table USUARIO_REGISTROMEDIDA (
   ID_USUARIO 	VARCHAR(1024) REFERENCES USUARIO(ID_USUARIO),
   ID_REGISTRO_MEDIDA 	VARCHAR(1024) REFERENCES REGISTRO_MEDIDA(ID_REGISTRO_MEDIDA)
);

/*==============================================================*/
/* Table: REGISTROMEDIDAS_REGISTROCATASTROFES                                              */
/*==============================================================*/
create table REGISTROMEDIDA_REGISTROCATASTROFE (
   ID_REGISTRO_MEDIDA 	VARCHAR(1024) REFERENCES REGISTRO_MEDIDA(ID_REGISTRO_MEDIDA),
   ID_REGISTRO_CATASTROFE 	VARCHAR(1024) REFERENCES REGISTRO_CATASTROFE(ID_REGISTRO_CATASTROFE)
);

