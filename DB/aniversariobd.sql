DROP DATABASE IF EXISTS aniversariobd;
CREATE DATABASE aniversariobd;

USE aniversariobd;

create table rolUsuario(
idRolUsuario int unsigned not null auto_increment primary key,
nombreRol varchar(15) not null);

insert into rolUsuario value(null,"Administrador");

create table usuario(
idUsuario int unsigned not null auto_increment primary key,
idRolUsuario int unsigned not null,
primerNombre varchar(15) not null,
segundoNombre varchar(15) null,
primerApellido varchar(15) not null,
segundoApellido varchar(15)null,
ciUsuario varchar(13) not null,
user varchar(15) not null,
password varchar(20) not null,
estado boolean not null,
foreign key(idRolUsuario) references rolusuario(idRolUsuario) on update cascade on delete cascade);

insert into usuario value(null,1,"Takumi",null,"Ito",null,"419402","takumi","12345",1);

create table evento(
idEvento int unsigned not null auto_increment primary key,
nombreEvento varchar(20) not null,
fechaInicio date not null,
fechaFin date not null,
idUsuario int unsigned not null,
estado boolean not null,
foreign key(idUsuario) references usuario(idUsuario) on update cascade on delete cascade);

create table participante(
idParticipante int unsigned not null auto_increment primary key,
ciParticipante varchar(15) unique not null,
sexoParticipante varchar(1) not null,
primerNombre varchar(15) not null,
segundoNombre varchar(15) null,
primerApellido varchar(15) not null,
segundoApellido varchar(15)null,
paisProcedencia varchar(30) null,
ciudadProcedencia varchar (30) null,
estudioUAB boolean null,
promocionUAB varchar(20) null,
telefonoParticipante int not null,
correoParticipante varchar(35) null,
edadParticipante int not null,
tallaPolera enum('S','M','L','XL','XXL') null);

create table paquete(
idPaquete int unsigned not null auto_increment primary key,
nombrePaquete varchar(30) not null,
precioPaquete Double not null,
estadoPaquete boolean not null);

create table inscripcion(
idInscripcion int unsigned not null auto_increment primary key,
idEvento int unsigned not null,
idParticipante int unsigned not null,
idPaquete int unsigned not null,
fechaHoraInscripcion datetime not null,
montoTotal Double not null,
fueValidado boolean null,
horaFechaValidacion datetime null,
idUsuario int unsigned not null,
foreign key(idParticipante) references participante(idParticipante) on update cascade on delete cascade,
foreign key(idEvento) references evento(idEvento) on update cascade on delete cascade,
foreign key(idPaquete) references paquete(idPaquete) on update cascade on delete cascade,
foreign key(idUsuario) references usuario(idUsuario) on update cascade on delete cascade);

create table pago(
idPago int unsigned not null auto_increment primary key,
idInscripcion int unsigned not null,
idParticipanteResponsable int unsigned not null,
esPorBanco boolean not null,
numeroComprobante varchar(20) null,
imgDeposito varchar(20) null,
nombreBanco varchar(30) not null,
montoDeposito Double not null,
foreign key(idInscripcion) references inscripcion(idInscripcion) on update cascade on delete cascade,
foreign key(idParticipanteResponsable) references participante(idParticipante) on update cascade on delete cascade);

create table tipoActividad(
idTipoActividad int unsigned not null auto_increment primary key,
nombreTipoActividad varchar(30) not null,
estadoTipoActividad boolean not null);

create table actividad(
idActividad int unsigned not null auto_increment primary key,
idEvento int unsigned not null,
nombreActividad varchar(30) not null,
idTipoActividad int unsigned not null,
estadoActividad boolean not null,
foreign key(idTipoActividad) references tipoActividad(idTipoActividad) on update cascade on delete cascade,
foreign key(idEvento) references evento(idEvento) on update cascade on delete cascade);

create table actividadDetalle(
idActividad int unsigned not null,
nombreActividadDetalle varchar(30) not null,
esDePago boolean not null,
precio Double null,
fechaInicioActividad date not null,
fechaFinActividad date not null,
horaInicio time not null,
foreign key(idActividad) references actividad(idActividad) on update cascade on delete cascade);

create table participanteActividad(
idParticipante int unsigned not null,
idActividad int unsigned not null,
foreign key(idParticipante) references participante(idParticipante) on update cascade on delete cascade,
foreign key(idActividad) references actividad(idActividad) on update cascade on delete cascade);

create table valoracion(
idValoracion int unsigned not null auto_increment primary key,
puntajeValoracion int not null,
idActividad int unsigned not null,
foreign key(idActividad) references actividad(idActividad) on update cascade on delete cascade);


create table inscripcionActividad(
idInscripcion int unsigned not null,
idActividad int unsigned not null,
asistencia boolean null,
foreign key(idInscripcion) references inscripcion(idInscripcion) on update cascade on delete cascade,
foreign key(idActividad) references actividad(idActividad) on update cascade on delete cascade);

create table preInscripcion(
idPreInscripcion int unsigned not null auto_increment primary key,
idEvento int unsigned not null,
idParticipante int unsigned not null,
montoTotal Double not null);

