# AWS Cloud practitioner (CL-C02)
Esto es una guia de como voy a preparar mi plan de estudio para la certificacion de AWS Cloud practitioner (CL-C02)

#### FASE 1 Semanas 1-2

- Fundamentos teóricos
- Estudio: AWS Skill Builder (gratis) — curso oficial "AWS Cloud Practitioner Essentials"
Contenidos: nube, regiones, EC2, S3, RDS, IAM, VPC, precios
Laboratorio: explora la consola, crea tu primer bucket S3 y una instancia EC2

#### Fase 2 Semanas 3-4
- Prácticas de laboratiorio
- Lanza, configura y termina servicios core: EC2, S3, Lambda, RDS, CloudWatch
Practica IAM: usuarios, roles, políticas y MFA
Explora la calculadora de costes y crea alertas de billing

#### Fase 3 Semanas 5-6 
- Simulacros de examen
- Examenes de práctica: Tutorials Dojo, ExamTopics, o el oficial de AWS
Meta: superar el 80% en simulacros antes de reservar el examen real



#### Recursos (gratuitos o baratos)

1. AWS Skill Builder — skill.aws.com → busca "Cloud Practitioner Essentials". Es el curso oficial y gratuito.
2. Tutorials Dojo — los mejores simulacros de práctica (unos 10€, vale la pena).
3. AWS Free Tier + tu laboratorio — para todo lo práctico.
4. ExamTopics — preguntas reales de exámenes anteriores, gratis.



#### Modulos del curso (AWS Skill Builder)


#### M1 
##### Introduccion a la nube
- Qué es cloud, modelos IaaS/PaaS/SaaS, ventajas clave 

#### M2 
##### Compute en la nube
- EC2, tipos de instancia, opciones de precios (On demand, Reserved, Spot)

#### M3 
##### Otros servicios Compute
- Lambda (serverless), ECS, EKS, Elastic Beanstalk. Cuándo usar cada uno

#### M4 
##### Goin Global
- Regiones, Zonas de Disponibilidad, Edge Locations, CloudFront. Diferencias clave.

#### M5
##### Networking
- VPC, subnets públicas/privadas, Security Groups vs NACLs, Route 53

#### M6
##### Storage
- S3 (clases de almacenamiento), EBS, EFS, S3 Glacier. Cuando usar cada uno

#### M7
##### Databases
- RDS, DinamoDB, Aurora, Redshift, Diferencia entre SQL y NoSQL en AWS

#### M8
##### AI/ML y Data Analytics
- SageMaker, Rekognition, Lex, Comprehend, Athena, Glue. Servicios y sus casos de uso

#### M9
##### Security
- IAM, Shared Reponsibility Model, KMS, Shield, WAF, Cognito. El dominio con mas peso

#### M10
##### Otros servicios Compute
- CloudWatch, CloudTrail, AWS Config, Trusted Advisor. Diferencia entre ellos

#### M11
##### Pricing and Support
- Modelos de pago, planes de soporte (Basic, Developer, Business, Enterprise), calculadora de AWS

#### M12
##### Migrating to AWS
- Cloud Adoption Frameworks, Snow Family, las 6 Rs de migracion, DMS



#### Como estudiar cada módulo
1. Ver video sin parar. No tomar apuntes (de momento)
2. Hacer "knowledge check" al final de cada leccion. Si se falla volver a ver el video
3. Practicar en el laboratorio
4. Apuntar cada sercicio, para qué sirve y cuándo usarlo. (ejemplo: EC2 -> servidor virtual en la nube -> cuando necesitas control total del SO)

#### Como Practicar
##### M1
- Qué hacer en AWS
##### M2 Compute
- Lanza una EC2 t2.micro, conéctate por SSH, termínala
##### M4 Global
- Explora el mapa de regiones en la consola, activa una región
##### M5 Networking
- Examina la VPC por defecto, mira sus subnets y Security Groups
##### M6 Stotage
- Crea un bucket S3, sube un archivo, hazlo público y privado
##### M7 Databases
- Lanza una RDS free tier, luego termínala
##### M9 Security
- Crea un usuario IAM, asígnale una política, activa MFA
##### M11 Pricing
- Usa la calculadora de precios de AWS con esos servicios

#### Ultimo paso

- Una vez completado el curso con todos los módulos, hacer el "AWS Certification Official Practice Questions Set" (también es gratis en aws skill builder)