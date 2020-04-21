<template>
    <ul class="breadcrumbs" aria-label="You are here:" role="navigation">
        <li :key="index" v-for="(crumb, index) in crumbs">
            <a v-if="hasLink(crumb)" :href="crumb.link">{{ crumb.name }}</a>
            <span v-else>{{ crumb.name }}</span>
        </li>
    </ul>
</template>

<script>
    export default {
        name: 'Breadcrumbs',
        props: {
            crumbs: Array
        },
        methods: {
            hasLink (crumb) {
                return !!crumb.link
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import "resources/sass/variables";

    $color: $black;
    $breadcrumb-link-color: $white;
    $margin: 10px;
    $separator: '/';
    $separator-color: $white;
    $mobile-back-character: '\f104';
    $mobile-back-character-color: $white;

    ul {
        list-style: none;
        padding: 0;

        li {
            display: inline;
            margin-right: $margin;
            color: $color;
            padding: 0;

            &:after {
                margin-left: $margin;
                content: $separator;
                color: $separator-color;
                font-weight: normal;
            }

            &:last-of-type {
                &:after {
                    content: '';
                }
            }

            @media all and (max-width: $breakpoint-mobile) {
                display: none;

                &:nth-last-child(2) {
                    display: block;
                    margin-left: 0;

                    &:before {
                        font-family: $font-awesome;
                        font-weight: 900;
                        content: $mobile-back-character;
                        margin-right: $margin;
                        color: $mobile-back-character-color;
                    }

                    &:after {
                        content: '';
                    }
                }
            }

            a,
            a:visited,
            a:active {
                color: $breadcrumb-link-color;
                text-decoration: none;

                &:hover {
                    color: $color;
                    text-decoration: none;
                }
            }
        }
    }
</style>
