Flowpack.ContentTransfer
===========================

Neos CMS package that provides import & export functionality for content

DISCLAIMER
----------

This package is in under development and the API is planned to change in the future.

# Commands

## Importing a single content file into a node path

    ./flow content:importxml --filename <filename> --target-node-path <target node path>

## Exporting content to a file

    ./flow content:export --filename <filename> --node-path <node path to export> --tidy --node-type-filter=<filter>

## Importing configured sources

Import all sources:

    ./flow content:importsource --source=.*

Import a single source:

    ./flow content:importsource --source=identifier

Import all sources matching pattern

    ./flow content:importsource --source=^foo.*

Manually select sources to import using a CLI question helper

    ./flow content:importsource

# Configuring import sources

Import sources are useful when one would like to import demo or test content in a ci setup.

## Import single file below

    Flowpack:
      ContentTransfer:
        import:
          sources:
            'My.Package':
              filePattern: 'resource://My.Package/Private/Content/MyFeature.xml'
              siteNodePath: '/sites/my-site'
              targetPattern: '{$q(site).find('[instanceof My.Package:DocumentType]').get(0)}'

## Import all snippets in a folder in the root of a site

    Flowpack:
      ContentTransfer:
        import:
          sources:
            'My.Package':
              filePattern: 'resource://My.Package/Private/Content/*'
              siteNodePath: '/sites/my-site'
