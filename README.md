This MediaWiki extension is based on part of the DFWikiFunctions collection of extensions (https://github.com/DF-Wiki/DFWikiFunctions)

The sole purpose of the extension is to automatically redirect page requests for unmatched pages to the first matched page in another namespace.
This allows links to the (Main) namespace to be redirected to an identically named page in another namespace should that page in the main namespace not exist.

It also can be used to redirect pages using transformations to a page's name.
It applies mb_strtolower by default.  The functions to use can be specified via the php settings using:
```
$wgAutoRedirectChecks = array(
	'mb_strtolower',
);
```

Example of namespace redirection:
On the main page of the wiki there is a link to a page describing some mechanism in a software application.  There are several namespaces in which this page exists, with each namespace being a different version of the software.
This plugin allows us to automatically redirect to the page in the namespace for the most recent version of the software.

It is recommended that you pair this with the https://github.com/df-wiki/namespacelinks extension or some equivalent to have links on a page within such a version namespace to default to remaining within that namespace.

Usage
-----
See the [wiki](https://github.com/XCompWiz/AutoRedirect/wiki/Configuration).
