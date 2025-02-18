<?php $title="RESIDENCIA POST BASICA NEFROLOGIA";
require("../../template/top.php"); ?>
<style>
    .margen {  
        margin-left: 10% ;
        margin-right: 30%;
        margin-bottom: 40px;
        margin-top: 40px;

    }
    .accordion-button{
        color: #fff;
        background-color: #0D6EFD;
    }
    img{
        margin:10px;
    }
    .lista{
    	list-style-type: disc;
    	margin-left: 40px;    	
    	
    }
    .tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
    .tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
    .tftable tr {background-color:#d4e3e5;}
    .tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
    .tftable tr:hover {background-color:#ffffff;}
</style>
<div class="container margen">

    <div class="row">
        <div class="col-12">
            <h2>
                <?php echo $title; ?>
            </h2>
            
            <h4>Presentación</h4>
            
            <p><strong>Residencia de Nefrología Universitaria:</strong> Sede Instituto Lanari.</p>

            <p><strong>Modalidad Postbásica:</strong> Duración 3 años.</p>

            <p><strong>Abarca todas las áreas de formación en nefrología:</strong></p>
             
             <ul class="lista">
             <li>Diálisis en agudo crónico</li>
             <li>Clínica nefrológica de pacientes internados en sala general</li>
             <li>Terapia intensiva, guardia y consultorios</li>
             <li>Trasplante renal</li>
             <li>Realización de biopsias renales (nativos y trasplante)</li>
             <li>Colocación de catéteres de diálisis transitorios</li>
             <li>Extensa promoción de actividad académica durante todos los años y de discusión de pacientes.</li>
             </ul><p></p>
            <p>Somos sede de La Carrera de especialista de Nefrología de la Universidad de Buenos Aires dictado en horario de residencia.</p>

            <!-- Comienzo Acordeón -->
                <div class="accordion" id="accordionBasic">
                 <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        INFORMACIÓN GENERAL - POSBÁSICAS
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
                      <div class="accordion-body">
                        <h4>Requisitos para aspirantes a Residencias Posbásicas</h4>
                            <p>1. DNI válido y vigente. Los extranjeros deberán poseer DNI argentino vigente y cumplir con las condiciones migratorias previstas en la Ley N 25.871 y sus normas reglamentarias y complementarias.</p>
                            <p>2. Título de Médico de universidad nacional o extranjera, del ámbito público o privado.</p>
                            <p>3. Quienes hayan realizado sus estudios en una universidad extranjera deberán presentar título debidamente convalidado por el Ministerio de Educación de la Nación.</p>
                            <p>4. Certificado de promedio general de la carrera (que contemple aplazos y sin puntos adicionales)</p>
                            <p>5. Certificado de residencia básica finalizada o de último año en curso certificada, en este caso, por el Establecimiento Formador.</p>
                            <p>6. Para aspirar a una residencia postbásica, la antigüedad del título no puede ser mayor a 8 años desde el momento de la fecha de expedición del título de grado al cierre del la inscripción (día 24 de junio de 2022).</p>
                            <p>7. Para aquellos aspirantes que hayan realizado su formación de grado en el extranjero, se tendrá en cuenta la fecha de expedición del título de origen, sin que tenga validez la fecha de convalidación del mismo.</p>
                            <p>8. Poseer matrícula profesional habilitante expedida por el Ministerio de Salud de la República Argentina.</p>
                            <p>9. Curriculum Vitae.</p>
                            <p>10. Antecedentes Académicos. Serán evaluados en el marco de la entrevista en las sedes respectivas.</p>
                            <div class="alert alert-info" role="alert">
                                <p>El envió de documentación a la/s institución/es elegida/s será vía email.</p>
                                <p>El asunto del correo electrónico debe estar confeccionado de la siguiente manera: </p>
                                <p>APELLIDO,NOMBRE-ESPECIALIDAD-DOCUMENTACION    (Por ejemplo: PEREZ,JUAN-NEONATOLOGIA-DOCUMENTACION)</p>
                                <p></p>
                                <p>Para el caso de aspirantes a la residencia de Nefrología en el Instituto Lanari, la documentación se centraliza en el Hospital de Clínicas (Universidad de Buenos Aires).</p>
                                
                            </div>
                       </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                       CRONOGRAMA
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse hide" aria-labelledby="headingTwo" data-bs-parent="#accordionBasic">
                      <div class="accordion-body">
                        <<img src="../../img/cronograma-nefro-posbasicas.jpg" alt="cronograma-nefro-posbasicas">
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ATENCION - POSBÁSICAS
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse hide" aria-labelledby="headingThree" data-bs-parent="#accordionBasic">
                      <div class="accordion-body">
                        <p><strong>La entrega de documentación para las residencias posbásicas será via email a las instituciones.</strong></p>
                        <p>Deberán remitir:</p>

                        <ul class="lista">
                          <li>Constancia de inscripción por Internet en la pagina de la Facultad.</li>
                          <li>DNI valido y vigente (Extranjeros DNI Argentino)</li>
                          <li>Titulo Universitario fotocopia simple</li>
                          <li>Certificado de residencia completa, exespecialidad, extendido por la DiInvestigacion o Autoridad competecorrespondiente.</li>
                          <li>Matricula Profesional habilitante expedidaSalud de la Republica Argentina.</li>
                          <li>Promedio General de la carrera (incluidos ala Facultad correspondiente.</li>
                          <li>Curriculum Vitae.</li>
                          <li>Los trabajos de investigación deberán ser meentregarlos.</li>
                        </ul>
                      </div>
                    </div>      
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        PROGRAMA
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse hide" aria-labelledby="headingFour" data-bs-parent="#accordionBasic">
                      <div class="accordion-body">
                        <div class="alert alert-info" role="alert">
                          <h4>REQUISITOS PARA ACCEDER A LA RESIDENCIA EN NEFROLOGÍA:</h4>                        
                          <p><strong>DURACIÓN DE LA RESIDENCIA:</strong>  3 (tres) años</p>
                          <p><strong>AÑO LECTIVO:</strong> comifinaliza el 31 de mayo.</p>
                          <p><strong>DOTACIÓN DE RESIDENTES:</strong> UNO (1) por año.</p>
                          <p><strong>HORARIO DE TRABAJO:</strong> Lunehoras | Sábados de 8 a 12 horas.</p>
                          <p><strong>GUARDIAS PASIVAS ROTATIVAS DRESIDENTES.</strong></p>
                          <p><strong>COLABORADORES DOCENTES:</strong> Departamento de Nefrología Clínica y derealizan rotaciones.</p>
                        </div>
                        <div class="alert alert-dark" role="alert">
                          <h4>DEFINICIÓN DEL PERFIL DEL MÉDICO RESIDENTE EN NEFROLOGÍA</h4>
                        
                          <p>La Residencia en Nefrología repressistema de educación inmediata de post-grformación de un médico con elevado nivespecialidad. El residente debe alccapacidad y responsabilidad necesaria parelevado nivel ético y profesional, entrenauna adecuada educación  médica contínua,profundo y completo conocimiento teónefrología, que le permita en el área asiprofesional eficaz, capaz de desempeñarse ppositiva integración con las otras discipImplica la formación en servicio y metodología específica, bajo asesorconstantes, con responsabilidades crecienlas actividades asistenciales, académiinvestigación. Desarrollará aptitudes en erenal en todas las fases de la enfcientíficas, capacidad de análisis crítico para el razonamiento clínico, capaciproblemas prevalentes en la comunidad, capen grupos de trabajo y multidiscipparticipación en la promoción de la salud la enfermedad, formación integral en lparticipación en la docencia de la división.</p>
                        </div>
                        <h3>OBJETIVOS GENERALES:</h3>

                        <p><strong>A) TEORICOS:</strong><br>
                        El residente de nefrología logrará conocimiento teórico completo sobre fisiología renal, medio interno, semiología renal, clínica nefrológica, trasplante renal y diálisis intra y extra corpórea.</p>

                        <p><strong>B) ASISTENCIALES:</strong><br>
                        El residente de nefrología adquirirá en forma gradual un especial entrenamiento en materia de asistencia con enfermos agudos y crónicos, internados y ambulatorios. Debe ser capaz de efectuar un interrogatorio nefrológico minucioso, una exploración física correcta, un planteo diagnóstico completo y un buen manejo de los métodos complementarios de estudio (sedimento urinario, punción biopsia renal, imágenes e interpretación de los preparados histológicos de biopsias renales), para llegar al diagnóstico final, asumiendo responsabilidades crecientes bajo supervisión constante.</p>

                        <p>Debe llegar a diagnosticar y tratar todas las emergencias en nefrología como: Síndrome urémico de enfermos agudos o crónicos, encefalopatía hipertensiva, cólico renal, complicaciones agudas de la hemodiálisis, paro cardiorrespiratorio, etc.</p>

                        <p>Estará en condiciones de manejar tanto los aspectos técnicos como médicos de la unidad de hemodiálisis, de la unidad de DPCA y de integrarse a un equipo de trasplante renal.</p>

                        <p><strong>C) ACADÉMICOS:</strong><br>
                        El residente de nefrología participará en las actividades académicas del hospital y de la División, con lo cual desarrollará el concepto de la conveniencia y necesidad de una formación contínua de postgrado.</p>

                        <p><strong>D) DE INVESTIGACIÓN:</strong><br>
                        El residente de nefrología conocerá la metodología de la investigación clínica en temas de la especialidad, para su futura aplicación en el área de su interés. Durante su entrenamiento elaborará trabajos prospectivos y retrospectivos.</p>

                        <h3>1er. AÑO DE RESIDENCIA EN NEFROLOGIA</h3>

                        <h5>OBJETIVOS</h5>

                        <strong>Área hemodiálisis :</strong>
                        <ul class="lista">
                          <li>Conocer el manejo de la sala de diálisis, la preparación del equipo, las normas de bioseguridad y del tratamiento del agua.</li> 
                          <li>Conocer las diferentes modalidades dialíticas: indicaciones, adecuación y complicaciones. </li>
                          <li>Conocer los diferentes tipos de accesos vasculares para hemodiálisis, indicaciones, monitoreo y complicaciones.</li>
                          <li>Aprender la técnica para colocar un catéter transitorio para hemodiálisis</li>
                          <li>Aprender la técnica de conexión/desconexión de pacientes en hemodiálisis </li>
                          <li>Conocer el manejo médico global del paciente en hemodiálisis</li>
                        </ul>
                        <strong>Área de trasplante renal :</strong>
                        <p>Conocer nociones básicas del manejo de operativos de distribución y trasplante renal.</p>
                        <h4>CONTENIDOS</h4>
                        <p>El residente adquirirá conocimientos teóricos de:</p>
                        <ul class="lista">
                          <li>Shock</li>
                          <li>Sepsis</li>
                          <li>Radiología nefrourológica</li>
                          <li>Radioisotopos en nefrología</li>
                          <li>Ecografía renal</li>
                          <li>Tomografía computada</li>
                          <li>Hemodiálisis</li>
                          <li>Insuficiencia renal</li>
                          <li>Técnica de la diálisis</li>
                          <li>Tipos de diálisis</li>
                          <li>Alteraciones hidroelectrolíticas</li>
                        </ul>
                        <h4>ACTIVIDADES DE APRENDIZAJE</h4>
                        <p>El residente realizará:</p>
                        <ul class="lista">
                          <li>Historia clínica de pacientes agudos y crónicos que inicien hemodiálisis</li>
                          <li>Colaborará en la preparación del puesto de diálisy desconexión, en los controles de los enfermos, los enfermos.</li>
                          <li>Búsqueda bibliográfica de temas nefrológicos</li>
                        </ul>
                        <h4>RECURSOS</h4>
                        <ul class="lista">
                          <li>Sala de Internación del Departamento de Medicina</li>
                          <li>Unidad de Terapia Intensiva</li>
                          <li>Salas de Hemodiálisis</li>
                        </ul>
                        <h4>2do AÑO DE RESIDENCIA DE NEFROLOGÍA</h4>

                        <strong>OBJETIVOS</strong>

                        <p>El residente será capaz de:</p>
                        <ul>
                          <li>Conocer las   de anatomía y fisiología renal.</li>
                          <li>Diagnosticar los diferentes síndromes renales.</li>
                          <li>Conocer la fisiopatología de los principales síndromes renales.</li>
                          <li>Conocer todas las técnicas de exploración de la función renal.</li>
                          <li>Evaluar enfermos ambulatorios.</li>
                          <li>Asistir a los enfermos internados con nefropatía.</li>
                          <li>Conocer el sedimento urinario normal y parenal percutánea.</li>
                          <li>Conocer la metodología de estudio en nefrología.</li>
                          <li>Realizar una biopsia renal con control nativos.</li>
                          <li>Reconocer e interpretar las lesiones hismicroscopía de luz, inmunofluorescencia y microscopía electrónica.</li>
                          <li>Conocer la técnica de diálisis peritoneal contínua ambulatoria.</li>
                          <li>Aprender el manejo de los donanates y recrenal.</li>
                          <li>Participar en el manejo pre, y postoperatorio del trasplante renal</li>
                          <li>Aprender a seleccionar el material bibliográfico.</li>
                        </ul>

                        <h4>CONTENIDOS</h4>

                        <strong>El residente adquirirá conocimientos teóricos de:</strong>

                        <ul>
                          <li>Histología de riñón normal.</li>
                          <li>Inmunohistoquímica.</li>
                          <li>Ultraestructura del riñón normal y patológico.</li>
                          <li>Distribución de los fluídos orgánicos y la composición corporal.</li>
                          <li>Fisiología renal. Sus métodos de estudio.</li>
                          <li>Manejo del sodio, cloro, agua.</li>
                          <li>Manejo por el riñón del equilibrio ácido-base.</li>
                          <li>Exámen físico-químico de la orina.</li>
                          <li>Síntomas y signos renales.</li>
                          <li>Hematurias.</li>
                          <li>Proteinurias.</li>
                          <li>Biopsias. Complicaciones, indicaciones y contraindicaciones.</li>
                          <li>Síndrome nefrótico y nefrítico.</li>
                          <li>El riñón en el metabolismo del calcio y el fósforo.</li>
                          <li>Ecografía renal.</li>
                          <li>Insuficiencia renal aguda. Fisiopatología.</li>
                          <li>Insuficiencia renal crónica. Fisiopatología.</li>
                        </ul>
                        <h4>El residente realizará:</h4>

                        <li>Participará en la selección, entrenamiento y seguimiento de los pacientes en tratamiento con DPCA</li>
                        <li>Consultorio Externo de Nefrología Clínica una vez por semana.</li>
                        <li>Diálisis peritoneal</li>
                        <li>Control clínico y evolución diaria en internados con nefropatía.</li>
                        <li>Revista de sala de enfermos internados con nefropatía, en la que el Departamento de Nefrología actúa como consultora.</li>
                        <li>Punciones biopsias renales bajo control ecográfico de riñones nativos.</li>
                        <li>Comentario de artículos de temas nefrológicos de revistas nacionales y extranjeras en el ateneo bibliográfico.</li>
                        <li>Concurrencia al ateneo Anatomo-clínico y Clínico del Departamento de Medicina de la Institución.</li>
                        <li>Rotación externa por servicio de diálisis peritoneal.</li>
                        <strong>RECURSOS</strong>

                        <ul class="lista">
                          <li>Salas de internación de los Departamentos de Medicina y Cirugía.</li>
                          <li>Laboratorio Central</li>
                          <li>Departamento de imágenes</li>
                          <li>Sala de biopsia renal</li>
                          <li>Consultorio externo de nefrología</li>
                        </ul>
                        <h4>3ro AÑO DE RESIDENCIA DE NEFROLOGÍA</h4>

                        <strong>OBJETIVOS</strong>

                        <p>El residente será capaz de:</p>
                        <ul class="lista">
                          <li>Aprender el manejo del trasplante renal, en sus etapas de preparación, ejecución y seguimiento.</li>
                          <li>Aprender el diagnóstico diferencial de las complicaciones del trasplante renal</li>
                          <li>Indicar el tratamiento inmunosupresor adecuado.</li>
                          <li>Conocer el monitoreo de las drogas inmunosupresoras</li>
                          <li>Conocer las complicaciones clínicas del  paciente trasplantado.</li>
                          <li>Conocer la metodología de estudio en investigación clínica.</li>
                          <li>Manejar los enfermos agudos y crónicos trasplantados durante todas las etapas de la  enfermedad</li>
                        </ul>
                        <strong>CONTENIDOS:</strong>

                        <p>El residente adquirirá conocimientos téoricos de:</p>
                        <ul class="lista">
                          <li>Estudio de histocompatibilidad en trasplante renal: HLA, importancia de los antígenos DP, DQ, MICA.</li>
                          <li>Cross macht contra panel y contra donante. Método citotoxicidaluminex.</li>
                          <li>Evaluación pre trasplante del receptor. Indicaciones y contraindicEvaluación pre trasplante del donante.</li>
                          <li>Indicaciones y contraindicaciones. Estudios.</li>
                          <li>Complicaciones precoces del receptor en el post-operatorio inmedimeses.</li>
                          <li>Infecciones y trasplante renal.</li>
                          <li>Complicaciones tardías del receptor. Tumores y trasplante.</li>
                          <li>Diabetes post trasplante.</li>
                          <li>Recidiva de enfermedad renal en el injerto.</li>
                          <li>Interpretación de biopsias del injerto. Clasificación de Banff.</li>
                          <li>Rechazo agudo del injerto (celular y humoral). Tratamientos.</li>
                          <li>Rechazo crónico del injerto</li>
                          <li>Tratamiento inmunosupresor. Drogas inmunosupresoras usadas en el trasplante</li>
                          <li>Manejo e complicaciones metabólicas del trasplante renal.</li>
                        </ul>
                        <strong>ESTRATEGIAS</strong>

                        <p>El residente realizará:</p>

                        <ul class="lista">
                          <li>Preparación y seguimiento de los trasplantes renales</li>
                          <li>Consultorio externo de trasplante y pre-trasplante</li>
                          <li>Aprenderá a efectuar las punciones biopsias renales de riñón trasplantado bajo control ecográfico.</li>
                          <li>Visualización de preparados histológicos de biopsias renales.</li>
                          <li>Comentario de artículos de temas nefrológicos de revistas nacionales y extranjeras en el ateneo bibliográfico.</li>
                          <li>Concurrencia al ateneo Anatomo-clínico y Clínico del Departamento de Medicina de la Institución</li>
                          <li>Rotación externa por período de 2 meses, en centros de nefrología nacional o internacional. El mismo será elegido por el residente dependiendo del área de capacitación que considere de interés.</li>
                        </ul>
                        <strong>RECURSOS</strong>
                        <ul class="lista">
                          <li>Sala de internaciones del Departamento de Medicina</li>
                          <li>Sala de Terapia Intensiva y de trasplante renal</li>
                          <li>Consultorio externo de Nefrología</li>
                          <li>Consultorio externo de Trasplante renal</li>
                        </ul>
                        <strong>Resumen distribución de actividades</strong>
                        <table class="tftable" border="1">
                        <tr>
                          <th width="15%">Distribución</th>
                          <th>Residente 1er año</th>
                          <th>Residente 2do año</th>
                          <th>Residente 3er año</th>
                        </tr>
                        <tr>
                          <td>70%</td>
                          <td>
                            <p>Hemodiálisis crónica</p>
                            <p>Diálisis peritoneal</p>
                          </td>
                          <td>
                            <p>Nefrología Clínica</p>
                            <p>Consultorios externos</p>
                          </td>
                          <td>
                            <p>Trasplante renal</p>
                            <p>Consultorios externos</p>
                          </td>
                        </tr>
                        <tr>
                          <td>20%</td>
                          <td>Nefrointensivismo</td>
                          <td>Trasplante renal</td>
                          <td>Consultorios externos</td>
                        </tr>
                        <tr>
                          <td>10%</td>
                          <td>
                            <p>Trasplante renal</p>
                            <p>Ateneos</p>
                          </td>
                          <td>
                            <p>Nefrointensivismo</p>
                            <p>Ateneos</p>
                          </td>
                          <td>
                            <p>Nefrointensivismo</p>
                            <p>Ateneos</p>
                          </td>
                        </tr>
                        </table>
                        <p></p><p></p>
                        <table class="tftable" border="1">
                          <tr>
                            <th width="10%">Carga horaria<br> semanal (activas)</th>
                            <th>Residente 1er año</th>
                            <th>Residente 2do año</th>
                            <th>Residente 3er año</th>
                          </tr>
                          <tr>
                            <td>34hs</td>
                            <td>
                              <p>Hemodiálisis crónica</p>
                              <p>Diálisis peritoneal</p>
                            </td>
                            <td>
                              <p>Nefrología Clínica</p>
                              <p>Consultorios externos</p>
                            </td>
                            <td>
                              <p>Trasplante renal</p>
                              <p>Consultorios externos</p>
                            </td>
                          </tr>
                          <tr>
                            <td>10hs</td>
                            <td>
                              <p>Nefrointensivismo</p>
                            </td>
                            <td>
                              <p>Trasplante renal</p>
                            </td>
                            <td>
                              <p>Nefrología clínica</p>
                              <p>Consultorios externos</p>
                            </td>
                          </tr>
                          <tr>
                            <td>5hs</td>
                            <td>
                              <p>Trasplante renal</p>
                              <p>Ateneos</p>
                            </td>
                            <td>
                              <p>Nefrointensivismo</p>
                              <p>Ateneos</p>
                            </td>
                            <td>
                              <p>Nefrointensivismo</p>
                              <p>Ateneos</p>
                            </td>
                          </tr>                          
                          <tr>
                            <td>Total: 49hs</td>
                          </tr>
                        </table>
                        <p></p>
                        <strong>ROTACIONES EXTERNAS</strong>

                        <p>Para complementar la formación, cada residente podrá elegir 1 lugar de rotación por un período de 2 meses en un servicio a su elección de acuerdo a su interés personal. Dicha rotación podrá ser realizada dentro del ámbito nacional o internacional, en este último caso los costos de su estadía en el extranjero quedan a su cargo. Se podrá realizar rotaciones externas en plazos estipulados por el Reglamento de Residencias Universitarias.</p>

                        <p>Las rotaciones se podrán realizar en otros Hospital Universitarios, Públicos, de Comunidades que acrediten experiencia y calidad en la formación en nefrología.</p>

                        <strong>CURSOS DE SOCIEDADES CIENTIFICAS</strong>

                        <p>Los residentes de 2do y 3er año podrán participar de alguno de los cursos dictados en forma regular por la Asociación Nefrológica de Buenos Aires de acuerdo a su interés y disponibilidad horaria, siempre que no afecten la actividad normal del servicio.</p>

                        <strong>CARRERA DE ESPECIALISTA UNIVERSITARIO EN NEFROLOGÍA</strong>

                        <p>El residente de 2do años podrá ingresar al 1er año de la Carrera de Especialistas en Nefrología y Medio Interno de la UBA y el de 3er año al 2do de dicha carrera. El Instituto Lanari constituye una de las sedes de dicha Carrera, estando el equipo docente conformado por especialistas de la institución e invitados de otras instituciones. El programa de la carrera es compartido por otras sedes de la UBA y se encuentra incluido dentro de las actividades de pos grado de la Facultad de Medicina.</p>

                        <strong>SISTEMA DE EVALUACION PARA LA RESIDENCIA DE NEFROLOGIA</strong>

                        <p>La evaluación del residente de nefrología será realizada por los Jefes de Departamento y de Servicio de Nefrología, en conjunto con la evaluación realizada por otros miembros del equipo (médicos de planta).</p>
                        <p></p>
                        <strong>Se valorarán los siguientes items:</strong>

                        <ul class="lista">
                          <li>Porcentaje de asistencia cumplida.</li>
                          <li>Número de actividades práticas realizadas.</li>
                          <li>Número de ateneos asistidos.</li>
                          <li>Horas de clases cumplidas.</li>
                          <li>Certificaciones de las rotaciones.</li>
                          <li>Trabajos de investigación u otros realizados.</li>
                          <li>Número de guardias cumplidas.</li>
                          <li>Interrelación con enfermos, residentes y docentes.</li>
                          <li>Grado de iniciativa.</li>
                          <li>Espíritu de colaboración</li>
                          <li>Aspectos éticos-morales.</li>
                        </ul>


                     </div>
                    </div>      
                  </div>
               
                </div>
                <!-- Fin Acordeón -->
        </div>
        
    </div>
    
</div>

<?php include("../../template/footer.php"); ?><?php $title="";?>
