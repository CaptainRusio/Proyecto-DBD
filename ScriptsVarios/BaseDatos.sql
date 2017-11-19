/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     11/11/2017 22:31:48                          */
/*==============================================================*/


drop table donation_campaign;

drop table events_to_benefit;

drop table gathering_center;

drop table region;

drop table province;

drop table commune;

drop table rnv;

drop table role;

drop table user_record;

drop table user;

drop table catastrophe;

drop table action;

drop table donation;

drop table volunteering;

drop table role_user;

drop table action_user;


/*==============================================================*/
/* Table: donation_compaign                                     */
/*==============================================================*/
create table donation_campaign (
   id_donation_campaign			integer 		primary key,
   goal                 integer                 null,
   actual_amount        integer                 null,
   anonymous_donation   integer                 null
);

/*==============================================================*/
/* Table: events_to_benefit                                     */
/*==============================================================*/
create table events_to_benefit (
   id_events_to_benefit integer					primary key,
   description_event    varchar(1024)       	null,
   number_of_volunteers	integer 				null
);

/*==============================================================*/
/* Table: gathering_center                                      */
/*==============================================================*/
create table gathering_center (
   id_gathering_center 	   integer 					 primary key,
   status_gathering_center integer                 	 null,
   description_gathering_center varchar(1024)        null,
);	



/*==============================================================*/
/* Table: region                                                */
/*==============================================================*/
create table region (
   id_region            integer                 primary key,
   name_region          varchar(1024)        null,
   location             varchar(1024)        null
);

/*==============================================================*/
/* Table: province                                              */
/*==============================================================*/
create table province (
   id_province          integer                 primary key,
   name_province        varchar(1024)        null,
   governor             varchar(1024)        null,
   id_region            integer                references region(id_region)
);
/*==============================================================*/
/* Table: commune                                               */
/*==============================================================*/
create table commune (
   id_commune           integer                 primary key,
   name_commune         varchar(1024)        null,
   id_province          integer               references province(id_province)
);

/*==============================================================*/
/* Table: rnv                                                   */
/*==============================================================*/
create table rnv (
   id_rnv 				integer				primary key,
   name          		varchar(1024)       null,
   description  		varchar(1024)		null,
   members				integer				null
);

/*==============================================================*/
/* Table: role                                                  */
/*==============================================================*/
create table role (
   id_role              integer                 primary key,
   name_role            varchar(1024)        null,
   permission           integer                 null
);

/*==============================================================*/
/* Table: user_record                                           */
/*==============================================================*/
create table user_record (
   id_user_record              integer       primary key,
   name                 varchar(1024)        null
);

/*==============================================================*/
/* Table: "user"                                                */
/*==============================================================*/
create table "user" (
   id_user              integer                 primary key,
   name                 varchar(1024)        null,
   password             varchar(1024)        null,
   type                 varchar(1024)        null,
   email                varchar(1024)        null,
   active               boolean              null,
   id_user_record		integer				references user_record(id_user_record),
   id_rnv				integer				references rnv(id_rnv)
);

/*==============================================================*/
/* Table: catastrophe                                           */
/*==============================================================*/
create table catastrophe (
   id_catastrophe       integer                 primary key,
   name_catastrophe     varchar(1024)        null,
   id_commune           integer                 references commune(id_commune)
);

/*==============================================================*/
/* Table: action                                                */
/*==============================================================*/
create table action (
   id_action            integer                 primary key,
   name_action          varchar(1024)        null,
   description          varchar(1024)        null,
   id_catastrophe 		integer 	references catastrophe(id_catastrophe),
   id_user 				integer		references user(id_user),
   date                 date                 	null,
   time               	integer                 null,
   address              varchar(1024)           null,
   progress             integer                 null	
   );
/*==============================================================*/
/* Table: donation                                              */
/*==============================================================*/
create table donation (
   id_donation			integer 				primary key,
   id_user              integer                	references user(id_user),
   total_amount         integer                 null,
   ong                  varchar(1024)        	null,
   campaign          	varchar(1024)			null

);
/*==============================================================*/
/* Table: volunteering                                          */
/*==============================================================*/
create table volunteering (
   type_of_job          varchar(1024)        	null,
   status_volunteering  integer                 null
);

create table role_user(
	id_user 			integer				references user(id_user),
	id_role 				integer				references role(role),
	primary key (id_user,id_role)

);

create table action_user(
	id_user 			integer				references user(id_user),
	id_action				integer				references action(id_action),
	primary key (id_user,id_action)
);