# Nominatim

## Usage

### Require
```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/miguel-naranjatec/nominatim"
    }
],
```

```
composer require  banzee/nominatim --prefer-source
```

```
composer update banzee/nominatim --prefer-source
```

### Search

```
dd(new Nominatim)->search('Madrid');
```

## Credits

- [Miguel Angel Moya Perona](https://banzee.net)
- [Naranjatec](https://naranjatec.com)
