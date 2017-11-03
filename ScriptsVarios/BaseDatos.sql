/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     30/10/2017 18:21:21                          */
/*==============================================================*/

drop table if exists catastrofes;

drop table if exists comunas;

drop table if exists historiales_usuario;

drop table if exists medidas;

drop table if exists provincias;

drop table if exists regiones;

drop table if exists registros_catastrofes;

drop table if exists registros_medidas;

drop table if exists rnv;

drop table if exists roles;

drop table if exists usuarios;

drop table if exists usuarios_roles;

drop table if exists usuarios_registrosmedidas;

drop table if exists registrosmedidas_registroscatastrofes;

drop table if exists usuario_genera_medida;

/*==============================================================*/
/* Table: rnv                                                   */
/*==============================================================*/
create table rnv (
   rnv_id               varchar(1024)        primary key,
   cantidad             integer                 null
);

/*==============================================================*/
/* Table: regiones                                                */
/*==============================================================*/
create table regiones (
   region_id            CHAR(10)             primary key,
   nombre               varchar(1024)        null,
   ubicacion            varchar(1024)        null
);


/*==============================================================*/
/* Table: provincias                                             */
/*==============================================================*/
create table provincias (
   provincia_id         varchar(1024)        primary key,
   nombre               varchar(1024)        null,
   ubicacion            varchar(1024)        null,
   region_id   varchar(1024) references regiones(region_id)

);


/*==============================================================*/
/* Table: comunas                                                */
/*==============================================================*/
create table comunas (
   comuna_id            varchar(1024)        primary key,
   nombre               varchar(1024)        null,
   ubicacion            varchar(1024)        null,
   provincia_id varchar(1024) references provincias(provincia_id)

);

/*==============================================================*/
/* Table: catastrofes                                            */
/*==============================================================*/
create table catastrofes (
   catastrofe_id     varchar(1024)        primary key,
   nombre_catastrofe    varchar(1024)        null,
   comuna_id varchar(1024) references comunas(comuna_id)
);

/*==============================================================*/
/* Table: registros_catastrofess                                  */
/*==============================================================*/
create table registros_catastrofes (
   registro_catastrofe_id varchar(1024)        primary key,
   fecha_inicio         date                 null,
   fecha_termino        date                 null,
   costo_Total          integer                  null,
   porcentaje_progreso  integer                  null,
   nombre               varchar(1024)        null,
   catastrofe_id varchar(1024) references catastrofes(catastrofe_id)
);

/*==============================================================*/
/* Table: medidas                                               */
/*==============================================================*/
create table medidas (
   medida_id           varchar(1024)        primary key,
   nombre_medida       varchar(1024)        null
);

/*==============================================================*/
/* Table: registros_medidas                                       */
/*==============================================================*/
create table registros_medidas (
   registro_medida_id  varchar(1024)        primary key,
   fecha_inicio         date                 null,
   fecha_termino        date                 null,
   valor_costo          integer               null,
   porcentaje_progreso  integer              null,
   nombre               varchar(1024)        null,
   medida_id varchar(1024) references medidas(medida_id)
);

/*==============================================================*/
/* Table: historiales_usuario                                     */
/*==============================================================*/
create table historiales_usuarios (
   historial_usuario_id varchar(1024)        primary key,
   fecha_accion         date                 null,
   descripcion          varchar(1024)        null
);



/*==============================================================*/
/* Table: usuarios                                               */
/*==============================================================*/
create table usuarios (
   usuario_id           varchar(1024)        primary key,
   correo_electronico   varchar(1024)        null,
   nombre_usuario       varchar(254)         null,
   contrasena_usuario   varchar(1024)        null,
   historial_usuario_id varchar(1024) references historiales_usuarios(historial_usuario_id),
   medida_id   varchar(1024) references medidas(medida_id),
   rnv_id varchar(1024) references rnv(rnv_id)
);


/*==============================================================*/
/* Table: roles                                                   */
/*==============================================================*/
create table roles (
   rol_id               varchar(1024)        primary key,
   nombre_rol           varchar(1024)        null
);

/*==============================================================*/
/* Table: usuarios_roles                                               */
/*==============================================================*/
create table usuarios_roles (
   usuario_id  varchar(1024) references usuarios(usuario_id),
   rol_id   varchar(1024) references roles(rol_id),
   primary key(usuario_id,rol_id)
);

/*==============================================================*/
/* Table: usuarios_registrosmedida                                               */
/*==============================================================*/
create table usuarios_registrosmedidas (
   usuario_id  varchar(1024) references usuarios(usuario_id),
   registro_medida_id   varchar(1024) references registros_medidas(registro_medida_id),
   primary key(usuario_id,registro_medida_id)
);

/*==============================================================*/
/* Table: registrosmedidas_registroscatastrofes                                             */
/*==============================================================*/
<<<<<<< HEAD
create table REGISTROMEDIDA_REGISTROCATASTROFE (
   ID_REGISTRO_MEDIDA 	VARCHAR(1024) REFERENCES REGISTRO_MEDIDA(ID_REGISTRO_MEDIDA),
   ID_REGISTRO_CATASTROFE 	VARCHAR(1024) REFERENCES REGISTRO_CATASTROFE(ID_REGISTRO_CATASTROFE)
=======
create table registrosmedidas_registroscatastrofes (
   registro_medida_id   varchar(1024) references registros_medidas(registro_medida_id),
   registro_catastrofe_id  varchar(1024) references registros_catastrofes(registro_catastrofe_id),
   primary key(registro_medida_id,registro_catastrofe_id)
>>>>>>> 61a381b127d57093522a845b583bc173944f3992
);

create table usuario_genera_medida(
   usuario_id varchar(1024) references usuarios(usuario_id),
   medida_id varchar(1024) references medidas(medida_id),
   primary key(usuario_id,medida_id)
);
