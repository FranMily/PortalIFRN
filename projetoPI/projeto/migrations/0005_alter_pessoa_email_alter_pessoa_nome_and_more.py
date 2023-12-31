# Generated by Django 4.2.3 on 2023-09-13 23:40

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('projeto', '0004_alter_comentario_comentario_alter_comentario_pessoa'),
    ]

    operations = [
        migrations.AlterField(
            model_name='pessoa',
            name='email',
            field=models.EmailField(db_column='pes_email', max_length=254),
        ),
        migrations.AlterField(
            model_name='pessoa',
            name='nome',
            field=models.CharField(db_column='pes_nome', max_length=200),
        ),
        migrations.AlterField(
            model_name='pessoa',
            name='perfil',
            field=models.IntegerField(db_column='pes_perfil', default=0),
        ),
        migrations.AlterField(
            model_name='pessoa',
            name='senha',
            field=models.CharField(db_column='pes_senha', max_length=256),
        ),
        migrations.AlterModelTable(
            name='pessoa',
            table='tb_pessoas',
        ),
    ]
