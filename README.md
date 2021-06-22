# Clima

> Script simples para acessar o clima atual a partir do OpenWeatherMap
> Exemplo demonstrando um script PHP e sua execução via Docker

## Antes de começar

Antes de utilizar, acesse o  [OpenWeatherMap](https://openweathermap.org/) e obtenha um token de API

## Construa a imagem

Desde que tenha o Docker instalado basta construir a imagem

```shell
docker build -t casimiro:php8-weather .
```

## Executando

```shell
docker run -e APIKEY=[API KEY] casimiro:php8-cli-weather --city=[Cidade]
```

substituindo `[API KEY]` pelo token obtido no OpenWeatherMap e `[Cidade]` pelo nome da cidade ou localização que quer consultar

O resultado deve ser parecido com:

```shell
Versão do PHP: 8.0.7
Clima agora: nublado
Temperatura: 14.27°C
Sensação térmica: 14.08°C
Umidade: 89%
```
