<?php
// Page
kt_add_page(347, 'Home', 'W3ZjX3JvdyBjc3M9Ii52Y19jdXN0b21fMTQ0ODg1NjczNDE0N3ttYXJnaW4tcmlnaHQ6IDBweCAhaW1wb3J0YW50O21hcmdpbi1ib3R0b206IDMwcHggIWltcG9ydGFudDttYXJnaW4tbGVmdDogLTEwcHggIWltcG9ydGFudDtwYWRkaW5nLXRvcDogMTBweCAhaW1wb3J0YW50O30iXVt2Y19jb2x1bW4gd2lkdGg9IjEvNCIgY3NzPSIudmNfY3VzdG9tXzE0NDg4Nzc1NzY5MTl7cGFkZGluZy1yaWdodDogMHB4ICFpbXBvcnRhbnQ7cGFkZGluZy1sZWZ0OiAxMHB4ICFpbXBvcnRhbnQ7fSIgb2Zmc2V0PSJ2Y19oaWRkZW4tbWQgdmNfaGlkZGVuLXNtIHZjX2hpZGRlbi14cyJdWy92Y19jb2x1bW5dW3ZjX2NvbHVtbiBjc3M9Ii52Y19jdXN0b21fMTQ0ODg1NzY3MDk2NntwYWRkaW5nLXJpZ2h0OiAwcHggIWltcG9ydGFudDtwYWRkaW5nLWxlZnQ6IDEwcHggIWltcG9ydGFudDt9IiBvZmZzZXQ9InZjX2NvbC1sZy03IHZjX2NvbC1tZC05Il1bcmV2X3NsaWRlcl92YyBhbGlhcz0ia3V0ZS1vcHQxMiJdWy92Y19jb2x1bW5dW3ZjX2NvbHVtbiBjc3M9Ii52Y19jdXN0b21fMTQ0ODg2MjIzNzk1M3twYWRkaW5nLXJpZ2h0OiAwcHggIWltcG9ydGFudDtwYWRkaW5nLWxlZnQ6IDBweCAhaW1wb3J0YW50O30iIG9mZnNldD0idmNfY29sLWxnLTIgdmNfY29sLW1kLTMgdmNfaGlkZGVuLXNtIHZjX2hpZGRlbi14cyJdW3ZjX3NpbmdsZV9pbWFnZSBpbWFnZT0iMjE5MiIgaW1nX3NpemU9ImZ1bGwiIG9uY2xpY2s9ImN1c3RvbV9saW5rIiBsaW5rPSIjIiBlbF9jbGFzcz0iYmFubmVyLW9wYWNpdHkiIGNzcz0iLnZjX2N1c3RvbV8xNDQ4OTQxMjY2NTU2e21hcmdpbi1ib3R0b206IDBweCAhaW1wb3J0YW50O30iXVsvdmNfY29sdW1uXVsvdmNfcm93XVt2Y19yb3cgY3NzPSIudmNfY3VzdG9tXzE0NDg4NDgwNjIwOTN7bWFyZ2luLXJpZ2h0OiAwcHggIWltcG9ydGFudDttYXJnaW4tYm90dG9tOiAwcHggIWltcG9ydGFudDttYXJnaW4tbGVmdDogMHB4ICFpbXBvcnRhbnQ7fSJdW3ZjX2NvbHVtbiB3aWR0aD0iMS8zIiBjc3M9Ii52Y19jdXN0b21fMTQ0ODg0Nzg2MTIyN3twYWRkaW5nLXJpZ2h0OiAwcHggIWltcG9ydGFudDtwYWRkaW5nLWxlZnQ6IDBweCAhaW1wb3J0YW50O30iXVt2Y19zaW5nbGVfaW1hZ2UgaW1hZ2U9IjIwNjIiIGltZ19zaXplPSJmdWxsIiBvbmNsaWNrPSJjdXN0b21fbGluayIgbGluaz0iIyIgZWxfY2xhc3M9ImJhbm5lci1ib2Rlci16b29tMiIgY3NzPSIudmNfY3VzdG9tXzE0NDg4NzI4NjY5NzV7bWFyZ2luLWJvdHRvbTogMzBweCAhaW1wb3J0YW50O30iXVsvdmNfY29sdW1uXVt2Y19jb2x1bW4gd2lkdGg9IjEvMyIgY3NzPSIudmNfY3VzdG9tXzE0NDg4NDc5MjYzMzl7cGFkZGluZy1yaWdodDogMHB4ICFpbXBvcnRhbnQ7cGFkZGluZy1sZWZ0OiAwcHggIWltcG9ydGFudDt9Il1bdmNfc2luZ2xlX2ltYWdlIGltYWdlPSIyMDYzIiBpbWdfc2l6ZT0iZnVsbCIgb25jbGljaz0iY3VzdG9tX2xpbmsiIGxpbms9IiMiIGVsX2NsYXNzPSJiYW5uZXItYm9kZXItem9vbTIiIGNzcz0iLnZjX2N1c3RvbV8xNDQ4ODcyODkwMDk1e21hcmdpbi1ib3R0b206IDMwcHggIWltcG9ydGFudDt9Il1bL3ZjX2NvbHVtbl1bdmNfY29sdW1uIHdpZHRoPSIxLzMiIGNzcz0iLnZjX2N1c3RvbV8xNDQ4ODQ3ODcwOTA3e21hcmdpbi1ib3R0b206IDMwcHggIWltcG9ydGFudDtwYWRkaW5nLXJpZ2h0OiAwcHggIWltcG9ydGFudDtwYWRkaW5nLWxlZnQ6IDBweCAhaW1wb3J0YW50O30iXVt2Y19zaW5nbGVfaW1hZ2UgaW1hZ2U9IjIwNjAiIGltZ19zaXplPSJmdWxsIiBvbmNsaWNrPSJjdXN0b21fbGluayIgbGluaz0iIyIgZWxfY2xhc3M9ImJhbm5lci1ib2Rlci16b29tMiIgY3NzPSIudmNfY3VzdG9tXzE0NDg4NzI5MDYxMjV7bWFyZ2luLWJvdHRvbTogMHB4ICFpbXBvcnRhbnQ7fSJdWy92Y19jb2x1bW5dWy92Y19yb3ddW3ZjX3JvdyBjc3M9Ii52Y19jdXN0b21fMTQ0ODg2NTc5MTY0MHttYXJnaW4tYm90dG9tOiAwcHggIWltcG9ydGFudDt9Il1bdmNfY29sdW1uIHdpZHRoPSIyLzMiIG9mZnNldD0idmNfY29sLWxnLTkgdmNfY29sLW1kLTkiIGNzcz0iLnZjX2N1c3RvbV8xNDQ4ODc5NTg0NTI2e21hcmdpbi1ib3R0b206IDBweCAhaW1wb3J0YW50O30iXVtjYXRlZ29yaWVzX3RhYiBwZXJfcGFnZT0iNiIgbnVtYmVyX2NvbHVtbj0iMyIgdGFic190eXBlPSJ0YWItNyIgdGl0bGU9IldPTUVOJ1MgRkFTSElPTiIgY2F0ZWdvcnk9IjE4NyIgbWFpbl9jb2xvcj0iI2ZmMzM2NiIgYmFubmVyX2xlZnQ9IjIwNjQiIGNzcz0iLnZjX2N1c3RvbV8xNDQ4ODc2MzMxMzE4e21hcmdpbi1ib3R0b206IDMwcHggIWltcG9ydGFudDt9Il1bdGFiX3NlY3Rpb25dW3RhYl9zZWN0aW9uIHNlY3Rpb25fdHlwZT0ibW9zdC1yZXZpZXciXVt0YWJfc2VjdGlvbiBzZWN0aW9uX3R5cGU9Im5ldy1hcnJpdmFsIl1bL2NhdGVnb3JpZXNfdGFiXVtjYXRlZ29yaWVzX3RhYiBwZXJfcGFnZT0iNiIgbnVtYmVyX2NvbHVtbj0iMyIgdGFic190eXBlPSJ0YWItNyIgdGl0bGU9Ik1FTidTIEZBU0hJT04iIGNhdGVnb3J5PSIxODYiIG1haW5fY29sb3I9IiMxMWE4YWIiIGJhbm5lcl9sZWZ0PSIyMDY1IiBjc3M9Ii52Y19jdXN0b21fMTQ0ODg3NjM1MTk0OHttYXJnaW4tYm90dG9tOiAzMHB4ICFpbXBvcnRhbnQ7fSJdW3RhYl9zZWN0aW9uXVt0YWJfc2VjdGlvbiBzZWN0aW9uX3R5cGU9Im1vc3QtcmV2aWV3Il1bdGFiX3NlY3Rpb24gc2VjdGlvbl90eXBlPSJuZXctYXJyaXZhbCJdWy9jYXRlZ29yaWVzX3RhYl1bY2F0ZWdvcmllc190YWIgcGVyX3BhZ2U9IjYiIG51bWJlcl9jb2x1bW49IjMiIHRhYnNfdHlwZT0idGFiLTciIHRpdGxlPSJBQ0NFU1NPUklFUyIgY2F0ZWdvcnk9IjE4OCIgbWFpbl9jb2xvcj0iIzAwNjZjYyIgYmFubmVyX2xlZnQ9IjIwNjYiIGNzcz0iLnZjX2N1c3RvbV8xNDQ4ODc2MzcyNTE2e21hcmdpbi1ib3R0b206IDMwcHggIWltcG9ydGFudDt9Il1bdGFiX3NlY3Rpb25dW3RhYl9zZWN0aW9uIHNlY3Rpb25fdHlwZT0ibW9zdC1yZXZpZXciXVt0YWJfc2VjdGlvbiBzZWN0aW9uX3R5cGU9Im5ldy1hcnJpdmFsIl1bL2NhdGVnb3JpZXNfdGFiXVsvdmNfY29sdW1uXVt2Y19jb2x1bW4gd2lkdGg9IjEvMyIgb2Zmc2V0PSJ2Y19jb2wtbGctMyB2Y19jb2wtbWQtMyJdW3ZjX3Jvd19pbm5lciBjc3M9Ii52Y19jdXN0b21fMTQ0OTQ3MDY2NzY2N3ttYXJnaW4tYm90dG9tOiAwcHggIWltcG9ydGFudDt9Il1bdmNfY29sdW1uX2lubmVyIG9mZnNldD0idmNfY29sLWxnLTEyIHZjX2NvbC1tZC0xMiB2Y19jb2wteHMtMTIiXVtsYXN0ZXN0X2RlYWxzX3NpZGViYXIgdHlwZT0ic3R5bGUtMiIgdGF4b25vbXk9IjE4OCIgbnVtYmVyPSIyIiBuYXZpZ2F0aW9uPSJ0cnVlIiB0aXRsZT0iSE9UIERFQUwgT0YgVEhJUyBXRUVLIiBjc3M9Ii52Y19jdXN0b21fMTQ0ODkzMzAxODE2OXttYXJnaW4tYm90dG9tOiAzMHB4ICFpbXBvcnRhbnQ7fSJdWy92Y19jb2x1bW5faW5uZXJdW3ZjX2NvbHVtbl9pbm5lciBvZmZzZXQ9InZjX2NvbC1sZy0xMiB2Y19jb2wtbWQtMTIgdmNfY29sLXhzLTEyIl1ba3RfdGVzdGltb25pYWwgdHlwZT0ic3R5bGUtMiIgY29sdW1ucz0iMyIgY3NzPSIudmNfY3VzdG9tXzE0NDg4NzQ5MTA0NDh7bWFyZ2luLWJvdHRvbTogMzBweCAhaW1wb3J0YW50O30iXVsvdmNfY29sdW1uX2lubmVyXVt2Y19jb2x1bW5faW5uZXIgb2Zmc2V0PSJ2Y19jb2wtbGctMTIgdmNfY29sLW1kLTEyIHZjX2NvbC14cy0xMiJdW3Byb2R1Y3Rfc2lkZWJhciB0YXJnZXQ9Im5ldy1hcnJpdmFsIiB0YXhvbm9teT0iMTg5IiBudW1iZXJfcHJvZHVjdD0iMTAiIHBlcl9wYWdlPSI1IiBuYXZpZ2F0aW9uPSJ0cnVlIiB0aXRsZT0iTmV3IHByb2R1Y3QiIGNzcz0iLnZjX2N1c3RvbV8xNDQ4OTM0MjU4NTYwe21hcmdpbi1ib3R0b206IDMwcHggIWltcG9ydGFudDt9Il1bL3ZjX2NvbHVtbl9pbm5lcl1bL3ZjX3Jvd19pbm5lcl1bdmNfcm93X2lubmVyIGNzcz0iLnZjX2N1c3RvbV8xNDQ5NDcwNzM3NjU1e21hcmdpbi10b3A6IDVweCAhaW1wb3J0YW50O21hcmdpbi1ib3R0b206IDBweCAhaW1wb3J0YW50O30iXVt2Y19jb2x1bW5faW5uZXJdW3ZjX3NpbmdsZV9pbWFnZSBpbWFnZT0iMjE4MCIgaW1nX3NpemU9ImZ1bGwiIG9uY2xpY2s9ImN1c3RvbV9saW5rIiBsaW5rPSIjIiBlbF9jbGFzcz0iYmFubmVyLWJvZGVyLXpvb20yIiBjc3M9Ii52Y19jdXN0b21fMTQ0OTQ2MzQ4Mjk3M3ttYXJnaW4tYm90dG9tOiAzMHB4ICFpbXBvcnRhbnQ7fSJdWy92Y19jb2x1bW5faW5uZXJdWy92Y19yb3dfaW5uZXJdWy92Y19jb2x1bW5dWy92Y19yb3ddW3ZjX3JvdyBjc3M9Ii52Y19jdXN0b21fMTQ0ODg0ODI1NzQzNHttYXJnaW4tYm90dG9tOiAwcHggIWltcG9ydGFudDt9Il1bdmNfY29sdW1uIHdpZHRoPSIxLzIiXVt2Y19zaW5nbGVfaW1hZ2UgaW1hZ2U9IjIwNjgiIGltZ19zaXplPSJmdWxsIiBvbmNsaWNrPSJjdXN0b21fbGluayIgbGluaz0iIyIgZWxfY2xhc3M9ImJhbm5lci1ib2Rlci16b29tMiIgY3NzPSIudmNfY3VzdG9tXzE0NDg4NzMyODcwMTB7bWFyZ2luLWJvdHRvbTogMzBweCAhaW1wb3J0YW50O30iXVsvdmNfY29sdW1uXVt2Y19jb2x1bW4gd2lkdGg9IjEvMiJdW3ZjX3NpbmdsZV9pbWFnZSBpbWFnZT0iMjA2OSIgaW1nX3NpemU9ImZ1bGwiIG9uY2xpY2s9ImN1c3RvbV9saW5rIiBsaW5rPSIjIiBlbF9jbGFzcz0iYmFubmVyLWJvZGVyLXpvb20yIiBjc3M9Ii52Y19jdXN0b21fMTQ0ODg3MzMwNjI0NnttYXJnaW4tYm90dG9tOiAzMHB4ICFpbXBvcnRhbnQ7fSJdWy92Y19jb2x1bW5dWy92Y19yb3ddW3ZjX3JvdyBjc3M9Ii52Y19jdXN0b21fMTQ0ODg2NTk5MzY0MHttYXJnaW4tYm90dG9tOiAwcHggIWltcG9ydGFudDt9Il1bdmNfY29sdW1uIG9mZnNldD0idmNfY29sLWxnLTQgdmNfY29sLW1kLTQiXVtwb3B1bGFyX2NhdGVnb3J5IHR5cGU9InN0eWxlLTIiIHRheG9ub215PSIxODciIHBlcl9wYWdlPSI3IiB0aXRsZT0iQ2F0ZWdvcnkgV29tZW4iIGljb249IjI0MjciIGJveF9iYWNrZ3JvdW5kPSIyMTY1IiBjc3M9Ii52Y19jdXN0b21fMTQ0ODg3Nzc2NjIxMXttYXJnaW4tYm90dG9tOiAzMHB4ICFpbXBvcnRhbnQ7fSJdWy92Y19jb2x1bW5dW3ZjX2NvbHVtbiBvZmZzZXQ9InZjX2NvbC1sZy00IHZjX2NvbC1tZC00Il1bcG9wdWxhcl9jYXRlZ29yeSB0eXBlPSJzdHlsZS0yIiB0YXhvbm9teT0iMTg2IiBwZXJfcGFnZT0iNyIgdGl0bGU9IkNhdGVnb3J5IE1lbiIgaWNvbj0iMjQyNyIgYm94X2JhY2tncm91bmQ9IjIxNjYiIGNzcz0iLnZjX2N1c3RvbV8xNDQ4ODc3Nzg5MDgze21hcmdpbi1ib3R0b206IDMwcHggIWltcG9ydGFudDt9Il1bL3ZjX2NvbHVtbl1bdmNfY29sdW1uIG9mZnNldD0idmNfY29sLWxnLTQgdmNfY29sLW1kLTQiXVtwb3B1bGFyX2NhdGVnb3J5IHR5cGU9InN0eWxlLTIiIHRheG9ub215PSIxODgiIHBlcl9wYWdlPSI3IiB0aXRsZT0iQ2F0ZWdvcnkgV29tZW4iIGljb249IjI0MjciIGJveF9iYWNrZ3JvdW5kPSIyMTY3IiBjc3M9Ii52Y19jdXN0b21fMTQ0ODg3NzgwODI4MnttYXJnaW4tYm90dG9tOiAzMHB4ICFpbXBvcnRhbnQ7fSJdWy92Y19jb2x1bW5dWy92Y19yb3ddW3ZjX3JvdyBjc3M9Ii52Y19jdXN0b21fMTQ0ODg1NDAyNDA3M3ttYXJnaW4tYm90dG9tOiAzMHB4ICFpbXBvcnRhbnQ7fSJdW3ZjX2NvbHVtbl1bYmxvZ19jYXJvdXNlbCBzdHlsZT0ic3R5bGUtNCIgcGVyX3BhZ2U9IjEwIiBuYXZpZ2F0aW9uPSJ0cnVlIiBsb29wPSJ0cnVlIiBtYXJnaW49IjMwIiB1c2VfcmVzcG9uc2l2ZT0iMSIgaXRlbXNfZGVzdG9wPSIyIiBpdGVtc190YWJsZXQ9IjEiIHRpdGxlPSJSRUNFTlQgQkxPRyBQT1NUUyIgc3VidGl0bGU9IlRoZSBsYXN0ZXN0IG5ld3MgZnJvbSB5b3VyIGJsb2ciXVsvdmNfY29sdW1uXVsvdmNfcm93XVt2Y19yb3cgY3NzPSIudmNfY3VzdG9tXzE0NDg5MzIzMDQ2NDB7bWFyZ2luLWJvdHRvbTogMHB4ICFpbXBvcnRhbnQ7fSJdW3ZjX2NvbHVtbiBjc3M9Ii52Y19jdXN0b21fMTQ0ODkzMjgxODYwOXttYXJnaW4tYm90dG9tOiAyNXB4ICFpbXBvcnRhbnQ7fSJdW2JyYW5kIHNob3dfcHJvZHVjdD0iZmFsc2UiIGxpbmVfYnJhbmQ9InNob3ctbG9nbzIiIG5hdmlnYXRpb249InRydWUiIGxvb3A9InRydWUiIG1hcmdpbj0iMjkuNSIgdXNlX3Jlc3BvbnNpdmU9IjEiIGl0ZW1zX2Rlc3RvcD0iNyJdWy92Y19jb2x1bW5dWy92Y19yb3dd', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?page_id=347', 'templates/fullwidth.php', 'open', 'a:11:{s:22:"kt_enable_page_comment";a:1:{i:0;s:4:"hide";}s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:17:"_wp_page_template";a:1:{i:0;s:23:"templates/fullwidth.php";}s:17:"_wpb_vc_js_status";a:1:{i:0;s:4:"true";}s:17:"_vc_post_settings";a:1:{i:0;s:30:"a:1:{s:10:"vc_grid_id";a:0:{}}";}s:14:"slide_template";a:1:{i:0;s:7:"default";}s:26:"_wpb_shortcodes_custom_css";a:1:{i:0;s:2244:".vc_custom_1448856734147{margin-right: 0px !important;margin-bottom: 30px !important;margin-left: -10px !important;padding-top: 10px !important;}.vc_custom_1448848062093{margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important;}.vc_custom_1448865791640{margin-bottom: 0px !important;}.vc_custom_1448848257434{margin-bottom: 0px !important;}.vc_custom_1448865993640{margin-bottom: 0px !important;}.vc_custom_1448854024073{margin-bottom: 30px !important;}.vc_custom_1448932304640{margin-bottom: 0px !important;}.vc_custom_1448877576919{padding-right: 0px !important;padding-left: 10px !important;}.vc_custom_1448857670966{padding-right: 0px !important;padding-left: 10px !important;}.vc_custom_1448862237953{padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1448941266556{margin-bottom: 0px !important;}.vc_custom_1448847861227{padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1448847926339{padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1448847870907{margin-bottom: 30px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1448872866975{margin-bottom: 30px !important;}.vc_custom_1448872890095{margin-bottom: 30px !important;}.vc_custom_1448872906125{margin-bottom: 0px !important;}.vc_custom_1448879584526{margin-bottom: 0px !important;}.vc_custom_1448876331318{margin-bottom: 30px !important;}.vc_custom_1448876351948{margin-bottom: 30px !important;}.vc_custom_1448876372516{margin-bottom: 30px !important;}.vc_custom_1449470667667{margin-bottom: 0px !important;}.vc_custom_1449470737655{margin-top: 5px !important;margin-bottom: 0px !important;}.vc_custom_1448933018169{margin-bottom: 30px !important;}.vc_custom_1448874910448{margin-bottom: 30px !important;}.vc_custom_1448934258560{margin-bottom: 30px !important;}.vc_custom_1449463482973{margin-bottom: 30px !important;}.vc_custom_1448873287010{margin-bottom: 30px !important;}.vc_custom_1448873306246{margin-bottom: 30px !important;}.vc_custom_1448877766211{margin-bottom: 30px !important;}.vc_custom_1448877789083{margin-bottom: 30px !important;}.vc_custom_1448877808282{margin-bottom: 30px !important;}.vc_custom_1448932818609{margin-bottom: 25px !important;}";}s:14:"kt_page_layout";a:1:{i:0;s:4:"full";}s:23:"kt_show_page_breadcrumb";a:1:{i:0;s:4:"hide";}s:18:"kt_show_page_title";a:1:{i:0;s:4:"hide";}s:10:"_edit_lock";a:1:{i:0;s:12:"1449799106:1";}}' );

kt_add_page(1188, 'Blog posts', '', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?page_id=2', 'default', 'open', 'a:5:{s:17:"_wp_page_template";a:1:{i:0;s:7:"default";}s:17:"_wpb_vc_js_status";a:1:{i:0;s:5:"false";}s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:17:"_vc_post_settings";a:1:{i:0;s:50:"a:2:{s:7:"vc_grid";a:0:{}s:10:"vc_grid_id";a:0:{}}";}s:14:"slide_template";a:1:{i:0;s:7:"default";}}' );

kt_add_page(369, 'Services', 'UHJhZXNlbnQgc2FwaWVuIG1hc3NhLCBjb252YWxsaXMgYSBwZWxsZW50ZXNxdWUgbmVjLCBlZ2VzdGFzIG5vbiBuaXNpLiBQZWxsZW50ZXNxdWUgaW4gaXBzdW0gaWQgb3JjaSBwb3J0YSBkYXBpYnVzLiBWZXN0aWJ1bHVtIGFudGUgaXBzdW0gcHJpbWlzIGluIGZhdWNpYnVzIG9yY2kgbHVjdHVzIGV0IHVsdHJpY2VzIHBvc3VlcmUgY3ViaWxpYSBDdXJhZTsgRG9uZWMgdmVsaXQgbmVxdWUsIGF1Y3RvciBzaXQgYW1ldCBhbGlxdWFtIHZlbCwgdWxsYW1jb3JwZXIgc2l0IGFtZXQgbGlndWxhLiBWZXN0aWJ1bHVtIGFudGUgaXBzdW0gcHJpbWlzIGluIGZhdWNpYnVzIG9yY2kgbHVjdHVzIGV0IHVsdHJpY2VzIHBvc3VlcmUgY3ViaWxpYSBDdXJhZTsgRG9uZWMgdmVsaXQgbmVxdWUsIGF1Y3RvciBzaXQgYW1ldCBhbGlxdWFtIHZlbCwgdWxsYW1jb3JwZXIgc2l0IGFtZXQgbGlndWxhLiBWZXN0aWJ1bHVtIGFjIGRpYW0gc2l0IGFtZXQgcXVhbSB2ZWhpY3VsYSBlbGVtZW50dW0gc2VkIHNpdCBhbWV0IGR1aS4gUXVpc3F1ZSB2ZWxpdCBuaXNpLCBwcmV0aXVtIHV0IGxhY2luaWEgaW4sIGVsZW1lbnR1bSBpZCBlbmltLiBWZXN0aWJ1bHVtIGFudGUgaXBzdW0gcHJpbWlzIGluIGZhdWNpYnVzIG9yY2kgbHVjdHVzIGV0IHVsdHJpY2VzIHBvc3VlcmUgY3ViaWxpYSBDdXJhZTsgRG9uZWMgdmVsaXQgbmVxdWUsIGF1Y3RvciBzaXQgYW1ldCBhbGlxdWFtIHZlbCwgdWxsYW1jb3JwZXIgc2l0IGFtZXQgbGlndWxhLiBOdWxsYSBxdWlzIGxvcmVtIHV0IGxpYmVybyBtYWxlc3VhZGEgZmV1Z2lhdC4gVml2YW11cyBzdXNjaXBpdCB0b3J0b3IgZWdldCBmZWxpcyBwb3J0dGl0b3Igdm9sdXRwYXQuIFZpdmFtdXMgbWFnbmEganVzdG8sIGxhY2luaWEgZWdldCBjb25zZWN0ZXR1ciBzZWQsIGNvbnZhbGxpcyBhdCB0ZWxsdXMuCgpWZXN0aWJ1bHVtIGFjIGRpYW0gc2l0IGFtZXQgcXVhbSB2ZWhpY3VsYSBlbGVtZW50dW0gc2VkIHNpdCBhbWV0IGR1aS4gQ3JhcyB1bHRyaWNpZXMgbGlndWxhIHNlZCBtYWduYSBkaWN0dW0gcG9ydGEuIFByYWVzZW50IHNhcGllbiBtYXNzYSwgY29udmFsbGlzIGEgcGVsbGVudGVzcXVlIG5lYywgZWdlc3RhcyBub24gbmlzaS4gTWF1cmlzIGJsYW5kaXQgYWxpcXVldCBlbGl0LCBlZ2V0IHRpbmNpZHVudCBuaWJoIHB1bHZpbmFyIGEuIE1hdXJpcyBibGFuZGl0IGFsaXF1ZXQgZWxpdCwgZWdldCB0aW5jaWR1bnQgbmliaCBwdWx2aW5hciBhLiBOdWxsYSBwb3J0dGl0b3IgYWNjdW1zYW4gdGluY2lkdW50LiBEb25lYyBzb2xsaWNpdHVkaW4gbW9sZXN0aWUgbWFsZXN1YWRhLiBWaXZhbXVzIHN1c2NpcGl0IHRvcnRvciBlZ2V0IGZlbGlzIHBvcnR0aXRvciB2b2x1dHBhdC4gVmVzdGlidWx1bSBhbnRlIGlwc3VtIHByaW1pcyBpbiBmYXVjaWJ1cyBvcmNpIGx1Y3R1cyBldCB1bHRyaWNlcyBwb3N1ZXJlIGN1YmlsaWEgQ3VyYWU7IERvbmVjIHZlbGl0IG5lcXVlLCBhdWN0b3Igc2l0IGFtZXQgYWxpcXVhbSB2ZWwsIHVsbGFtY29ycGVyIHNpdCBhbWV0IGxpZ3VsYS4gUGVsbGVudGVzcXVlIGluIGlwc3VtIGlkIG9yY2kgcG9ydGEgZGFwaWJ1cy4KClByb2luIGVnZXQgdG9ydG9yIHJpc3VzLiBRdWlzcXVlIHZlbGl0IG5pc2ksIHByZXRpdW0gdXQgbGFjaW5pYSBpbiwgZWxlbWVudHVtIGlkIGVuaW0uIE51bGxhIHF1aXMgbG9yZW0gdXQgbGliZXJvIG1hbGVzdWFkYSBmZXVnaWF0LiBQcmFlc2VudCBzYXBpZW4gbWFzc2EsIGNvbnZhbGxpcyBhIHBlbGxlbnRlc3F1ZSBuZWMsIGVnZXN0YXMgbm9uIG5pc2kuIENyYXMgdWx0cmljaWVzIGxpZ3VsYSBzZWQgbWFnbmEgZGljdHVtIHBvcnRhLiBWaXZhbXVzIG1hZ25hIGp1c3RvLCBsYWNpbmlhIGVnZXQgY29uc2VjdGV0dXIgc2VkLCBjb252YWxsaXMgYXQgdGVsbHVzLiBRdWlzcXVlIHZlbGl0IG5pc2ksIHByZXRpdW0gdXQgbGFjaW5pYSBpbiwgZWxlbWVudHVtIGlkIGVuaW0uIENyYXMgdWx0cmljaWVzIGxpZ3VsYSBzZWQgbWFnbmEgZGljdHVtIHBvcnRhLiBEb25lYyBzb2xsaWNpdHVkaW4gbW9sZXN0aWUgbWFsZXN1YWRhLiBTZWQgcG9ydHRpdG9yIGxlY3R1cyBuaWJoLgoKRG9uZWMgcnV0cnVtIGNvbmd1ZSBsZW8gZWdldCBtYWxlc3VhZGEuIEN1cmFiaXR1ciBhbGlxdWV0IHF1YW0gaWQgZHVpIHBvc3VlcmUgYmxhbmRpdC4gVmVzdGlidWx1bSBhbnRlIGlwc3VtIHByaW1pcyBpbiBmYXVjaWJ1cyBvcmNpIGx1Y3R1cyBldCB1bHRyaWNlcyBwb3N1ZXJlIGN1YmlsaWEgQ3VyYWU7IERvbmVjIHZlbGl0IG5lcXVlLCBhdWN0b3Igc2l0IGFtZXQgYWxpcXVhbSB2ZWwsIHVsbGFtY29ycGVyIHNpdCBhbWV0IGxpZ3VsYS4gQ3VyYWJpdHVyIGFyY3UgZXJhdCwgYWNjdW1zYW4gaWQgaW1wZXJkaWV0IGV0LCBwb3J0dGl0b3IgYXQgc2VtLiBRdWlzcXVlIHZlbGl0IG5pc2ksIHByZXRpdW0gdXQgbGFjaW5pYSBpbiwgZWxlbWVudHVtIGlkIGVuaW0uIEN1cmFiaXR1ciBhcmN1IGVyYXQsIGFjY3Vtc2FuIGlkIGltcGVyZGlldCBldCwgcG9ydHRpdG9yIGF0IHNlbS4gQ3VyYWJpdHVyIGFsaXF1ZXQgcXVhbSBpZCBkdWkgcG9zdWVyZSBibGFuZGl0LiBDdXJhYml0dXIgYWxpcXVldCBxdWFtIGlkIGR1aSBwb3N1ZXJlIGJsYW5kaXQuIFByb2luIGVnZXQgdG9ydG9yIHJpc3VzLiBRdWlzcXVlIHZlbGl0IG5pc2ksIHByZXRpdW0gdXQgbGFjaW5pYSBpbiwgZWxlbWVudHVtIGlkIGVuaW0uCgpTZWQgcG9ydHRpdG9yIGxlY3R1cyBuaWJoLiBDcmFzIHVsdHJpY2llcyBsaWd1bGEgc2VkIG1hZ25hIGRpY3R1bSBwb3J0YS4gTnVsbGEgcG9ydHRpdG9yIGFjY3Vtc2FuIHRpbmNpZHVudC4gVml2YW11cyBzdXNjaXBpdCB0b3J0b3IgZWdldCBmZWxpcyBwb3J0dGl0b3Igdm9sdXRwYXQuIE51bGxhIHBvcnR0aXRvciBhY2N1bXNhbiB0aW5jaWR1bnQuIERvbmVjIHNvbGxpY2l0dWRpbiBtb2xlc3RpZSBtYWxlc3VhZGEuIERvbmVjIHJ1dHJ1bSBjb25ndWUgbGVvIGVnZXQgbWFsZXN1YWRhLiBDcmFzIHVsdHJpY2llcyBsaWd1bGEgc2VkIG1hZ25hIGRpY3R1bSBwb3J0YS4gVmVzdGlidWx1bSBhYyBkaWFtIHNpdCBhbWV0IHF1YW0gdmVoaWN1bGEgZWxlbWVudHVtIHNlZCBzaXQgYW1ldCBkdWkuIFZpdmFtdXMgc3VzY2lwaXQgdG9ydG9yIGVnZXQgZmVsaXMgcG9ydHRpdG9yIHZvbHV0cGF0Lg==', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?page_id=369', 'default', 'open', 'a:7:{s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:17:"_wp_page_template";a:1:{i:0;s:7:"default";}s:17:"_wpb_vc_js_status";a:1:{i:0;s:5:"false";}s:17:"_vc_post_settings";a:1:{i:0;s:50:"a:2:{s:7:"vc_grid";a:0:{}s:10:"vc_grid_id";a:0:{}}";}s:14:"slide_template";a:1:{i:0;s:7:"default";}s:23:"kt_show_page_breadcrumb";a:1:{i:0;s:4:"show";}s:18:"kt_show_page_title";a:1:{i:0;s:4:"show";}}' );

kt_add_page(371, 'Support', 'RG9uZWMgcnV0cnVtIGNvbmd1ZSBsZW8gZWdldCBtYWxlc3VhZGEuIFZpdmFtdXMgbWFnbmEganVzdG8sIGxhY2luaWEgZWdldCBjb25zZWN0ZXR1ciBzZWQsIGNvbnZhbGxpcyBhdCB0ZWxsdXMuIFByYWVzZW50IHNhcGllbiBtYXNzYSwgY29udmFsbGlzIGEgcGVsbGVudGVzcXVlIG5lYywgZWdlc3RhcyBub24gbmlzaS4gRG9uZWMgc29sbGljaXR1ZGluIG1vbGVzdGllIG1hbGVzdWFkYS4gU2VkIHBvcnR0aXRvciBsZWN0dXMgbmliaC4gUHJhZXNlbnQgc2FwaWVuIG1hc3NhLCBjb252YWxsaXMgYSBwZWxsZW50ZXNxdWUgbmVjLCBlZ2VzdGFzIG5vbiBuaXNpLiBQcmFlc2VudCBzYXBpZW4gbWFzc2EsIGNvbnZhbGxpcyBhIHBlbGxlbnRlc3F1ZSBuZWMsIGVnZXN0YXMgbm9uIG5pc2kuIFZpdmFtdXMgc3VzY2lwaXQgdG9ydG9yIGVnZXQgZmVsaXMgcG9ydHRpdG9yIHZvbHV0cGF0LiBEb25lYyBzb2xsaWNpdHVkaW4gbW9sZXN0aWUgbWFsZXN1YWRhLiBWaXZhbXVzIG1hZ25hIGp1c3RvLCBsYWNpbmlhIGVnZXQgY29uc2VjdGV0dXIgc2VkLCBjb252YWxsaXMgYXQgdGVsbHVzLgoKTnVsbGEgcG9ydHRpdG9yIGFjY3Vtc2FuIHRpbmNpZHVudC4gU2VkIHBvcnR0aXRvciBsZWN0dXMgbmliaC4gQ3VyYWJpdHVyIG5vbiBudWxsYSBzaXQgYW1ldCBuaXNsIHRlbXB1cyBjb252YWxsaXMgcXVpcyBhYyBsZWN0dXMuIFZlc3RpYnVsdW0gYW50ZSBpcHN1bSBwcmltaXMgaW4gZmF1Y2lidXMgb3JjaSBsdWN0dXMgZXQgdWx0cmljZXMgcG9zdWVyZSBjdWJpbGlhIEN1cmFlOyBEb25lYyB2ZWxpdCBuZXF1ZSwgYXVjdG9yIHNpdCBhbWV0IGFsaXF1YW0gdmVsLCB1bGxhbWNvcnBlciBzaXQgYW1ldCBsaWd1bGEuIFF1aXNxdWUgdmVsaXQgbmlzaSwgcHJldGl1bSB1dCBsYWNpbmlhIGluLCBlbGVtZW50dW0gaWQgZW5pbS4gTWF1cmlzIGJsYW5kaXQgYWxpcXVldCBlbGl0LCBlZ2V0IHRpbmNpZHVudCBuaWJoIHB1bHZpbmFyIGEuIFZlc3RpYnVsdW0gYWMgZGlhbSBzaXQgYW1ldCBxdWFtIHZlaGljdWxhIGVsZW1lbnR1bSBzZWQgc2l0IGFtZXQgZHVpLiBDdXJhYml0dXIgYXJjdSBlcmF0LCBhY2N1bXNhbiBpZCBpbXBlcmRpZXQgZXQsIHBvcnR0aXRvciBhdCBzZW0uIE51bGxhIHBvcnR0aXRvciBhY2N1bXNhbiB0aW5jaWR1bnQuIFZlc3RpYnVsdW0gYWMgZGlhbSBzaXQgYW1ldCBxdWFtIHZlaGljdWxhIGVsZW1lbnR1bSBzZWQgc2l0IGFtZXQgZHVpLgoKTnVsbGEgcG9ydHRpdG9yIGFjY3Vtc2FuIHRpbmNpZHVudC4gRG9uZWMgc29sbGljaXR1ZGluIG1vbGVzdGllIG1hbGVzdWFkYS4gQ3VyYWJpdHVyIG5vbiBudWxsYSBzaXQgYW1ldCBuaXNsIHRlbXB1cyBjb252YWxsaXMgcXVpcyBhYyBsZWN0dXMuIFZpdmFtdXMgbWFnbmEganVzdG8sIGxhY2luaWEgZWdldCBjb25zZWN0ZXR1ciBzZWQsIGNvbnZhbGxpcyBhdCB0ZWxsdXMuIE1hdXJpcyBibGFuZGl0IGFsaXF1ZXQgZWxpdCwgZWdldCB0aW5jaWR1bnQgbmliaCBwdWx2aW5hciBhLiBDdXJhYml0dXIgYWxpcXVldCBxdWFtIGlkIGR1aSBwb3N1ZXJlIGJsYW5kaXQuIERvbmVjIHNvbGxpY2l0dWRpbiBtb2xlc3RpZSBtYWxlc3VhZGEuIE51bGxhIHBvcnR0aXRvciBhY2N1bXNhbiB0aW5jaWR1bnQuIFZpdmFtdXMgc3VzY2lwaXQgdG9ydG9yIGVnZXQgZmVsaXMgcG9ydHRpdG9yIHZvbHV0cGF0LiBWZXN0aWJ1bHVtIGFudGUgaXBzdW0gcHJpbWlzIGluIGZhdWNpYnVzIG9yY2kgbHVjdHVzIGV0IHVsdHJpY2VzIHBvc3VlcmUgY3ViaWxpYSBDdXJhZTsgRG9uZWMgdmVsaXQgbmVxdWUsIGF1Y3RvciBzaXQgYW1ldCBhbGlxdWFtIHZlbCwgdWxsYW1jb3JwZXIgc2l0IGFtZXQgbGlndWxhLgoKQ3VyYWJpdHVyIGFsaXF1ZXQgcXVhbSBpZCBkdWkgcG9zdWVyZSBibGFuZGl0LiBMb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldCwgY29uc2VjdGV0dXIgYWRpcGlzY2luZyBlbGl0LiBEb25lYyBzb2xsaWNpdHVkaW4gbW9sZXN0aWUgbWFsZXN1YWRhLiBWaXZhbXVzIHN1c2NpcGl0IHRvcnRvciBlZ2V0IGZlbGlzIHBvcnR0aXRvciB2b2x1dHBhdC4gUXVpc3F1ZSB2ZWxpdCBuaXNpLCBwcmV0aXVtIHV0IGxhY2luaWEgaW4sIGVsZW1lbnR1bSBpZCBlbmltLiBDdXJhYml0dXIgYXJjdSBlcmF0LCBhY2N1bXNhbiBpZCBpbXBlcmRpZXQgZXQsIHBvcnR0aXRvciBhdCBzZW0uIFZpdmFtdXMgc3VzY2lwaXQgdG9ydG9yIGVnZXQgZmVsaXMgcG9ydHRpdG9yIHZvbHV0cGF0LiBDcmFzIHVsdHJpY2llcyBsaWd1bGEgc2VkIG1hZ25hIGRpY3R1bSBwb3J0YS4gRG9uZWMgc29sbGljaXR1ZGluIG1vbGVzdGllIG1hbGVzdWFkYS4gUHJhZXNlbnQgc2FwaWVuIG1hc3NhLCBjb252YWxsaXMgYSBwZWxsZW50ZXNxdWUgbmVjLCBlZ2VzdGFzIG5vbiBuaXNpLgoKTG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4gU2VkIHBvcnR0aXRvciBsZWN0dXMgbmliaC4gTnVsbGEgcG9ydHRpdG9yIGFjY3Vtc2FuIHRpbmNpZHVudC4gTnVsbGEgcG9ydHRpdG9yIGFjY3Vtc2FuIHRpbmNpZHVudC4gRG9uZWMgcnV0cnVtIGNvbmd1ZSBsZW8gZWdldCBtYWxlc3VhZGEuIEN1cmFiaXR1ciBub24gbnVsbGEgc2l0IGFtZXQgbmlzbCB0ZW1wdXMgY29udmFsbGlzIHF1aXMgYWMgbGVjdHVzLiBNYXVyaXMgYmxhbmRpdCBhbGlxdWV0IGVsaXQsIGVnZXQgdGluY2lkdW50IG5pYmggcHVsdmluYXIgYS4gU2VkIHBvcnR0aXRvciBsZWN0dXMgbmliaC4gUHJhZXNlbnQgc2FwaWVuIG1hc3NhLCBjb252YWxsaXMgYSBwZWxsZW50ZXNxdWUgbmVjLCBlZ2VzdGFzIG5vbiBuaXNpLiBWZXN0aWJ1bHVtIGFudGUgaXBzdW0gcHJpbWlzIGluIGZhdWNpYnVzIG9yY2kgbHVjdHVzIGV0IHVsdHJpY2VzIHBvc3VlcmUgY3ViaWxpYSBDdXJhZTsgRG9uZWMgdmVsaXQgbmVxdWUsIGF1Y3RvciBzaXQgYW1ldCBhbGlxdWFtIHZlbCwgdWxsYW1jb3JwZXIgc2l0IGFtZXQgbGlndWxhLg==', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?page_id=371', 'default', 'open', 'a:7:{s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:17:"_wp_page_template";a:1:{i:0;s:7:"default";}s:17:"_wpb_vc_js_status";a:1:{i:0;s:5:"false";}s:17:"_vc_post_settings";a:1:{i:0;s:50:"a:2:{s:7:"vc_grid";a:0:{}s:10:"vc_grid_id";a:0:{}}";}s:14:"slide_template";a:1:{i:0;s:7:"default";}s:23:"kt_show_page_breadcrumb";a:1:{i:0;s:4:"show";}s:18:"kt_show_page_title";a:1:{i:0;s:4:"show";}}' );


// Other
kt_other_post_type(55, 'megamenu', 0 ,'Main menu - Fashion', 'W3ZjX3Jvd11bdmNfY29sdW1uIHdpZHRoPSIxLzQiXVt2Y19zaW5nbGVfaW1hZ2UgaW1hZ2U9IjIxMzAiIGltZ19zaXplPSJmdWxsIl1bdmNfd3BfY3VzdG9tbWVudSBuYXZfbWVudT0iMTcyIiB0aXRsZT0iTWVuJ3MiXVsvdmNfY29sdW1uXVt2Y19jb2x1bW4gd2lkdGg9IjEvNCJdW3ZjX3NpbmdsZV9pbWFnZSBpbWFnZT0iMjEzMiIgaW1nX3NpemU9ImZ1bGwiXVt2Y193cF9jdXN0b21tZW51IG5hdl9tZW51PSIxNzIiIHRpdGxlPSJXb21lbidzIl1bL3ZjX2NvbHVtbl1bdmNfY29sdW1uIHdpZHRoPSIxLzQiXVt2Y19zaW5nbGVfaW1hZ2UgaW1hZ2U9IjIxMzMiIGltZ19zaXplPSJmdWxsIl1bdmNfd3BfY3VzdG9tbWVudSBuYXZfbWVudT0iMTcwIiB0aXRsZT0iS2lkJ3MiXVsvdmNfY29sdW1uXVt2Y19jb2x1bW4gd2lkdGg9IjEvNCJdW3ZjX3NpbmdsZV9pbWFnZSBpbWFnZT0iMjEzNSIgaW1nX3NpemU9ImZ1bGwiXVt2Y193cF9jdXN0b21tZW51IG5hdl9tZW51PSIxODUiIHRpdGxlPSJUcmVuZGluZyJdWy92Y19jb2x1bW5dWy92Y19yb3dd', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?post_type=megamenu&#038;p=55', '', 'closed', 'a:6:{s:17:"kt_megamenu_width";a:1:{i:0;s:3:"830";}s:17:"_vc_post_settings";a:2:{i:0;s:30:"a:1:{s:10:"vc_grid_id";a:0:{}}";i:1;s:30:"a:1:{s:10:"vc_grid_id";a:0:{}}";}s:14:"slide_template";a:2:{i:0;s:7:"default";i:1;s:7:"default";}s:17:"_wpb_vc_js_status";a:2:{i:0;s:4:"true";i:1;s:4:"true";}s:10:"_edit_last";a:2:{i:0;s:1:"1";i:1;s:1:"1";}s:10:"_edit_lock";a:1:{i:0;s:12:"1448876272:1";}}' );

kt_other_post_type(764, 'megamenu', 0 ,'Vertical Menu - Shoes', 'W3ZjX3Jvd11bdmNfY29sdW1uXVtsaXN0X3Byb2R1Y3QgbnVtYmVyPSI0IiB0eXBlcz0iYXJyaXZhbCIgY2F0PSIxODciXVsvdmNfY29sdW1uXVsvdmNfcm93XQ==', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?post_type=megamenu&#038;p=764', '', 'closed', 'a:6:{s:14:"slide_template";a:1:{i:0;s:7:"default";}s:17:"_vc_post_settings";a:1:{i:0;s:30:"a:1:{s:10:"vc_grid_id";a:0:{}}";}s:17:"_wpb_vc_js_status";a:1:{i:0;s:4:"true";}s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:17:"kt_megamenu_width";a:1:{i:0;s:3:"830";}s:10:"_edit_lock";a:1:{i:0;s:12:"1448876501:1";}}' );

kt_other_post_type(766, 'megamenu', 0 ,'Vertical Menu - Sport', 'W3ZjX3Jvd11bdmNfY29sdW1uIHdpZHRoPSIxLzMiXVt2Y193cF9jdXN0b21tZW51IG5hdl9tZW51PSIxODIiIHRpdGxlPSJUZW5uaXMiXVsvdmNfY29sdW1uXVt2Y19jb2x1bW4gd2lkdGg9IjEvMyJdW3ZjX3dwX2N1c3RvbW1lbnUgbmF2X21lbnU9IjE4MiIgdGl0bGU9IlN3aW1taW5nIl1bL3ZjX2NvbHVtbl1bdmNfY29sdW1uIHdpZHRoPSIxLzMiXVt2Y193cF9jdXN0b21tZW51IG5hdl9tZW51PSIxODIiIHRpdGxlPSJTaG9lcyJdWy92Y19jb2x1bW5dWy92Y19yb3ddW3ZjX3JvdyBjc3M9Ii52Y19jdXN0b21fMTQ0MjIxMzcxNzU0OHttYXJnaW4tdG9wOiAxMHB4ICFpbXBvcnRhbnQ7cGFkZGluZy10b3A6IDEwcHggIWltcG9ydGFudDt9Il1bdmNfY29sdW1uXVt2Y19zaW5nbGVfaW1hZ2UgaW1hZ2U9IjIxNDAiIGltZ19zaXplPSJmdWxsIiBvbmNsaWNrPSJjdXN0b21fbGluayIgbGluaz0iIyIgY3NzPSIudmNfY3VzdG9tXzE0NDg4NzY1OTQ4NDR7bWFyZ2luLXRvcDogMTBweCAhaW1wb3J0YW50O30iXVsvdmNfY29sdW1uXVsvdmNfcm93XQ==', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?post_type=megamenu&#038;p=766', '', 'closed', 'a:7:{s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:17:"_wpb_vc_js_status";a:1:{i:0;s:4:"true";}s:17:"_vc_post_settings";a:1:{i:0;s:30:"a:1:{s:10:"vc_grid_id";a:0:{}}";}s:14:"slide_template";a:1:{i:0;s:7:"default";}s:26:"_wpb_shortcodes_custom_css";a:1:{i:0;s:137:".vc_custom_1442213717548{margin-top: 10px !important;padding-top: 10px !important;}.vc_custom_1448876594844{margin-top: 10px !important;}";}s:17:"kt_megamenu_width";a:1:{i:0;s:3:"830";}s:10:"_edit_lock";a:1:{i:0;s:12:"1448876593:1";}}' );

kt_other_post_type(835, 'megamenu', 0 ,'Main menu - Foods', 'W3ZjX3Jvd11bdmNfY29sdW1uIHdpZHRoPSIxLzQiXVt2Y193cF9jdXN0b21tZW51IG5hdl9tZW51PSIxNTciIHRpdGxlPSJBU0lBTiJdW3ZjX3dwX2N1c3RvbW1lbnUgbmF2X21lbnU9IjE4MCIgdGl0bGU9IlNBVVNBR0VTIl1bL3ZjX2NvbHVtbl1bdmNfY29sdW1uIHdpZHRoPSIxLzQiXVt2Y193cF9jdXN0b21tZW51IG5hdl9tZW51PSIxNjQiIHRpdGxlPSJFVVJPUEVBTiJdW3ZjX3dwX2N1c3RvbW1lbnUgbmF2X21lbnU9IjE1OSIgdGl0bGU9IkNISUNLRU4iXVsvdmNfY29sdW1uXVt2Y19jb2x1bW4gd2lkdGg9IjEvNCJdW3ZjX3dwX2N1c3RvbW1lbnUgbmF2X21lbnU9IjE2NiIgdGl0bGU9IkZBU1QiXVt2Y193cF9jdXN0b21tZW51IG5hdl9tZW51PSIxNzkiIHRpdGxlPSJTQU5EV0lDSCJdWy92Y19jb2x1bW5dW3ZjX2NvbHVtbiB3aWR0aD0iMS80Il1bdmNfc2luZ2xlX2ltYWdlIGltYWdlPSIyMTM4IiBpbWdfc2l6ZT0iZnVsbCIgYWxpZ25tZW50PSJyaWdodCIgb25jbGljaz0iY3VzdG9tX2xpbmsiIGxpbms9IiMiXVsvdmNfY29sdW1uXVsvdmNfcm93XQ==', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?post_type=megamenu&#038;p=835', '', 'closed', 'a:6:{s:17:"kt_megamenu_width";a:1:{i:0;s:3:"830";}s:14:"slide_template";a:1:{i:0;s:7:"default";}s:17:"_vc_post_settings";a:1:{i:0;s:30:"a:1:{s:10:"vc_grid_id";a:0:{}}";}s:17:"_wpb_vc_js_status";a:1:{i:0;s:4:"true";}s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:10:"_edit_lock";a:1:{i:0;s:12:"1448876382:1";}}' );

kt_other_post_type(647, 'service', 0 ,'Safe Shopping', 'TmFtIGFkaXBpc2NpbmcuIE51bGxhbSB2ZWwgc2VtLiBDdXJhYml0dXIgdmVzdGlidWx1bSBhbGlxdWFtIGxlby4gRnVzY2UgdnVscHV0YXRlIGVsZWlmZW5kIHNhcGllbi4gQWVuZWFuIGxlbyBsaWd1bGEsIHBvcnR0aXRvciBldSwgY29uc2VxdWF0IHZpdGFlLCBlbGVpZmVuZCBhYywgZW5pbS4KCk51bGxhIHBvcnRhIGRvbG9yLiBWaXZhbXVzIGVsZW1lbnR1bSBzZW1wZXIgbmlzaS4gTmFtIHByZXRpdW0gdHVycGlzIGV0IGFyY3UuIEN1cmFiaXR1ciBhdCBsYWN1cyBhYyB2ZWxpdCBvcm5hcmUgbG9ib3J0aXMuIEFlbmVhbiB1dCBlcm9zIGV0IG5pc2wgc2FnaXR0aXMgdmVzdGlidWx1bS4KCk51bGxhIGZhY2lsaXNpLiBNYWVjZW5hcyB1bGxhbWNvcnBlciwgZHVpIGV0IHBsYWNlcmF0IGZldWdpYXQsIGVyb3MgcGVkZSB2YXJpdXMgbmlzaSwgY29uZGltZW50dW0gdml2ZXJyYSBmZWxpcyBudW5jIGV0IGxvcmVtLiBFdGlhbSBpbXBlcmRpZXQgaW1wZXJkaWV0IG9yY2kuIFN1c3BlbmRpc3NlIGVuaW0gdHVycGlzLCBkaWN0dW0gc2VkLCBpYWN1bGlzIGEsIGNvbmRpbWVudHVtIG5lYywgbmlzaS4gQ3VyYWJpdHVyIHVsbGFtY29ycGVyIHVsdHJpY2llcyBuaXNpLgoKRXRpYW0gZmV1Z2lhdCBsb3JlbSBub24gbWV0dXMuIFZlc3RpYnVsdW0gcHVydXMgcXVhbSwgc2NlbGVyaXNxdWUgdXQsIG1vbGxpcyBzZWQsIG5vbnVtbXkgaWQsIG1ldHVzLiBOYW0gaXBzdW0gcmlzdXMsIHJ1dHJ1bSB2aXRhZSwgdmVzdGlidWx1bSBldSwgbW9sZXN0aWUgdmVsLCBsYWN1cy4gTW9yYmkgbmVjIG1ldHVzLiBQaGFzZWxsdXMgdGVtcHVzLgoKUGVsbGVudGVzcXVlIGhhYml0YW50IG1vcmJpIHRyaXN0aXF1ZSBzZW5lY3R1cyBldCBuZXR1cyBldCBtYWxlc3VhZGEgZmFtZXMgYWMgdHVycGlzIGVnZXN0YXMuIE1vcmJpIG1hdHRpcyB1bGxhbWNvcnBlciB2ZWxpdC4gSW50ZWdlciB0aW5jaWR1bnQuIEZ1c2NlIGEgcXVhbS4gTW9yYmkgbWF0dGlzIHVsbGFtY29ycGVyIHZlbGl0Lg==', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?post_type=service&amp;p=647', '', 'closed', 'a:6:{s:26:"_kt_page_service_sub_title";a:1:{i:0;s:23:"Safe Shopping Guarantee";}s:27:"_kt_about_service_sub_title";a:1:{i:0;s:23:"Safe Shopping Guarantee";}s:14:"slide_template";a:1:{i:0;s:7:"default";}s:17:"_vc_post_settings";a:1:{i:0;s:50:"a:2:{s:7:"vc_grid";a:0:{}s:10:"vc_grid_id";a:0:{}}";}s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:21:"_kt_page_service_desc";a:1:{i:0;s:23:"Safe Shopping Guarantee";}}' );

kt_other_post_type(652, 'service', 0 ,'Free Shipping', 'Q3VyYWJpdHVyIGEgZmVsaXMgaW4gbnVuYyBmcmluZ2lsbGEgdHJpc3RpcXVlLiBVdCBub24gZW5pbSBlbGVpZmVuZCBmZWxpcyBwcmV0aXVtIGZldWdpYXQuIEluIGNvbnNlY3RldHVlciB0dXJwaXMgdXQgdmVsaXQuIFZlc3RpYnVsdW0gc3VzY2lwaXQgbnVsbGEgcXVpcyBvcmNpLiBNYWVjZW5hcyB2ZXN0aWJ1bHVtIG1vbGxpcyBkaWFtLgoKUHJvaW4gdml2ZXJyYSwgbGlndWxhIHNpdCBhbWV0IHVsdHJpY2VzIHNlbXBlciwgbGlndWxhIGFyY3UgdHJpc3RpcXVlIHNhcGllbiwgYSBhY2N1bXNhbiBuaXNpIG1hdXJpcyBhYyBlcm9zLiBWaXZhbXVzIGV1aXNtb2QgbWF1cmlzLiBQaGFzZWxsdXMgdGVtcHVzLiBDcmFzIHJpc3VzIGlwc3VtLCBmYXVjaWJ1cyB1dCwgdWxsYW1jb3JwZXIgaWQsIHZhcml1cyBhYywgbGVvLiBQcm9pbiBtYWduYS4KClZlc3RpYnVsdW0gdm9sdXRwYXQgcHJldGl1bSBsaWJlcm8uIFZpdmFtdXMgZXVpc21vZCBtYXVyaXMuIERvbmVjIHZlbmVuYXRpcyB2dWxwdXRhdGUgbG9yZW0uIFBlbGxlbnRlc3F1ZSBkYXBpYnVzIGhlbmRyZXJpdCB0b3J0b3IuIFN1c3BlbmRpc3NlIHBvdGVudGkuCgpDdXJhYml0dXIgdmVzdGlidWx1bSBhbGlxdWFtIGxlby4gUHJhZXNlbnQgdHVycGlzLiBBZW5lYW4gdXQgZXJvcyBldCBuaXNsIHNhZ2l0dGlzIHZlc3RpYnVsdW0uIFBlbGxlbnRlc3F1ZSBjb21tb2RvIGVyb3MgYSBlbmltLiBDcmFzIHVsdHJpY2llcyBtaSBldSB0dXJwaXMgaGVuZHJlcml0IGZyaW5naWxsYS4KCkNyYXMgbm9uIGRvbG9yLiBBZW5lYW4gY29tbW9kbyBsaWd1bGEgZWdldCBkb2xvci4gRnVzY2UgcGhhcmV0cmEgY29udmFsbGlzIHVybmEuIEFlbmVhbiBwb3N1ZXJlLCB0b3J0b3Igc2VkIGN1cnN1cyBmZXVnaWF0LCBudW5jIGF1Z3VlIGJsYW5kaXQgbnVuYywgZXUgc29sbGljaXR1ZGluIHVybmEgZG9sb3Igc2FnaXR0aXMgbGFjdXMuIEZ1c2NlIGZlcm1lbnR1bSBvZGlvIG5lYyBhcmN1Lg==', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?post_type=service&amp;p=652', '', 'closed', 'a:6:{s:26:"_kt_page_service_sub_title";a:1:{i:0;s:18:"On order over $200";}s:27:"_kt_about_service_sub_title";a:1:{i:0;s:18:"On order over $200";}s:14:"slide_template";a:1:{i:0;s:7:"default";}s:17:"_vc_post_settings";a:1:{i:0;s:50:"a:2:{s:7:"vc_grid";a:0:{}s:10:"vc_grid_id";a:0:{}}";}s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:21:"_kt_page_service_desc";a:1:{i:0;s:18:"On order over $200";}}' );

kt_other_post_type(653, 'service', 0 ,'30-day return', 'UHJvaW4gcHJldGl1bSwgbGVvIGFjIHBlbGxlbnRlc3F1ZSBtb2xsaXMsIGZlbGlzIG51bmMgdWx0cmljZXMgZXJvcywgc2VkIGdyYXZpZGEgYXVndWUgYXVndWUgbW9sbGlzIGp1c3RvLiBTdXNwZW5kaXNzZSBuaXNsIGVsaXQsIHJob25jdXMgZWdldCwgZWxlbWVudHVtIGFjLCBjb25kaW1lbnR1bSBlZ2V0LCBkaWFtLiBQcm9pbiBzYXBpZW4gaXBzdW0sIHBvcnRhIGEsIGF1Y3RvciBxdWlzLCBldWlzbW9kIHV0LCBtaS4gU3VzcGVuZGlzc2UgcG90ZW50aS4gVXQgdGluY2lkdW50IHRpbmNpZHVudCBlcmF0LgoKUGhhc2VsbHVzIG5lYyBzZW0gaW4ganVzdG8gcGVsbGVudGVzcXVlIGZhY2lsaXNpcy4gU2VkIGF1Z3VlIGlwc3VtLCBlZ2VzdGFzIG5lYywgdmVzdGlidWx1bSBldCwgbWFsZXN1YWRhIGFkaXBpc2NpbmcsIGR1aS4gU3VzcGVuZGlzc2UgbmlzbCBlbGl0LCByaG9uY3VzIGVnZXQsIGVsZW1lbnR1bSBhYywgY29uZGltZW50dW0gZWdldCwgZGlhbS4gTW9yYmkgbmVjIG1ldHVzLiBJbiBhdWN0b3IgbG9ib3J0aXMgbGFjdXMuCgpQaGFzZWxsdXMgZ3JhdmlkYSBzZW1wZXIgbmlzaS4gQWxpcXVhbSBlcmF0IHZvbHV0cGF0LiBJbiBkdWkgbWFnbmEsIHBvc3VlcmUgZWdldCwgdmVzdGlidWx1bSBldCwgdGVtcG9yIGF1Y3RvciwganVzdG8uIFBlbGxlbnRlc3F1ZSB1dCBuZXF1ZS4gSW4gaGFjIGhhYml0YXNzZSBwbGF0ZWEgZGljdHVtc3QuCgpGdXNjZSBmZXJtZW50dW0uIEN1cmFiaXR1ciBhIGZlbGlzIGluIG51bmMgZnJpbmdpbGxhIHRyaXN0aXF1ZS4gRHVpcyBhcmN1IHRvcnRvciwgc3VzY2lwaXQgZWdldCwgaW1wZXJkaWV0IG5lYywgaW1wZXJkaWV0IGlhY3VsaXMsIGlwc3VtLiBJbiBjb25zZWN0ZXR1ZXIgdHVycGlzIHV0IHZlbGl0LiBOYW0gY29tbW9kbyBzdXNjaXBpdCBxdWFtLgoKUGhhc2VsbHVzIGdyYXZpZGEgc2VtcGVyIG5pc2kuIE5hbSBpcHN1bSByaXN1cywgcnV0cnVtIHZpdGFlLCB2ZXN0aWJ1bHVtIGV1LCBtb2xlc3RpZSB2ZWwsIGxhY3VzLiBDdXJhYml0dXIgYXQgbGFjdXMgYWMgdmVsaXQgb3JuYXJlIGxvYm9ydGlzLiBDcmFzIG5vbiBkb2xvci4gTmFtIGNvbW1vZG8gc3VzY2lwaXQgcXVhbS4=', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?post_type=service&amp;p=653', '', 'closed', 'a:6:{s:26:"_kt_page_service_sub_title";a:1:{i:0;s:19:"Moneyback guarantee";}s:27:"_kt_about_service_sub_title";a:1:{i:0;s:19:"Moneyback guarantee";}s:14:"slide_template";a:1:{i:0;s:7:"default";}s:17:"_vc_post_settings";a:1:{i:0;s:50:"a:2:{s:7:"vc_grid";a:0:{}s:10:"vc_grid_id";a:0:{}}";}s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:21:"_kt_page_service_desc";a:1:{i:0;s:19:"Moneyback guarantee";}}' );

kt_other_post_type(654, 'service', 0 ,'24/7 support', 'U3VzcGVuZGlzc2Ugbm9uIG5pc2wgc2l0IGFtZXQgdmVsaXQgaGVuZHJlcml0IHJ1dHJ1bS4gRG9uZWMgZWxpdCBsaWJlcm8sIHNvZGFsZXMgbmVjLCB2b2x1dHBhdCBhLCBzdXNjaXBpdCBub24sIHR1cnBpcy4gUGVsbGVudGVzcXVlIHV0IG5lcXVlLiBQcmFlc2VudCB2ZXN0aWJ1bHVtIGRhcGlidXMgbmliaC4gUGhhc2VsbHVzIG5lYyBzZW0gaW4ganVzdG8gcGVsbGVudGVzcXVlIGZhY2lsaXNpcy4KCk1hdXJpcyB0dXJwaXMgbnVuYywgYmxhbmRpdCBldCwgdm9sdXRwYXQgbW9sZXN0aWUsIHBvcnRhIHV0LCBsaWd1bGEuIE5hbSBhZGlwaXNjaW5nLiBQcmFlc2VudCBjb25ndWUgZXJhdCBhdCBtYXNzYS4gRXRpYW0gZmV1Z2lhdCBsb3JlbSBub24gbWV0dXMuIER1aXMgbGVvLgoKVXQgYSBuaXNsIGlkIGFudGUgdGVtcHVzIGhlbmRyZXJpdC4gUHJhZXNlbnQgdmVuZW5hdGlzIG1ldHVzIGF0IHRvcnRvciBwdWx2aW5hciB2YXJpdXMuIFBlbGxlbnRlc3F1ZSBsaWJlcm8gdG9ydG9yLCB0aW5jaWR1bnQgZXQsIHRpbmNpZHVudCBlZ2V0LCBzZW1wZXIgbmVjLCBxdWFtLiBEb25lYyBpbnRlcmR1bSwgbWV0dXMgZXQgaGVuZHJlcml0IGFsaXF1ZXQsIGRvbG9yIGRpYW0gc2FnaXR0aXMgbGlndWxhLCBlZ2V0IGVnZXN0YXMgbGliZXJvIHR1cnBpcyB2ZWwgbWkuIEN1cmFiaXR1ciB0dXJwaXMuCgpQZWxsZW50ZXNxdWUgcG9zdWVyZS4gTmFtIGlwc3VtIHJpc3VzLCBydXRydW0gdml0YWUsIHZlc3RpYnVsdW0gZXUsIG1vbGVzdGllIHZlbCwgbGFjdXMuIFV0IGEgbmlzbCBpZCBhbnRlIHRlbXB1cyBoZW5kcmVyaXQuIFV0IHRpbmNpZHVudCB0aW5jaWR1bnQgZXJhdC4gRXRpYW0gc29sbGljaXR1ZGluLCBpcHN1bSBldSBwdWx2aW5hciBydXRydW0sIHRlbGx1cyBpcHN1bSBsYW9yZWV0IHNhcGllbiwgcXVpcyB2ZW5lbmF0aXMgYW50ZSBvZGlvIHNpdCBhbWV0IGVyb3MuCgpOdWxsYSBuZXF1ZSBkb2xvciwgc2FnaXR0aXMgZWdldCwgaWFjdWxpcyBxdWlzLCBtb2xlc3RpZSBub24sIHZlbGl0LiBQaGFzZWxsdXMgYSBlc3QuIFBoYXNlbGx1cyBncmF2aWRhIHNlbXBlciBuaXNpLiBQcmFlc2VudCB0dXJwaXMuIENyYXMgaWQgZHVpLg==', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?post_type=service&amp;p=654', '', 'closed', 'a:6:{s:26:"_kt_page_service_sub_title";a:1:{i:0;s:20:"Online consultations";}s:27:"_kt_about_service_sub_title";a:1:{i:0;s:20:"Online consultations";}s:14:"slide_template";a:1:{i:0;s:7:"default";}s:17:"_vc_post_settings";a:1:{i:0;s:50:"a:2:{s:7:"vc_grid";a:0:{}s:10:"vc_grid_id";a:0:{}}";}s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:21:"_kt_page_service_desc";a:1:{i:0;s:20:"Online consultations";}}' );

kt_other_post_type(724, 'testimonial', 0 ,'Maria', 'TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdCwgc2VkIGRvIGVpdXNtb2QgdGVtcG9yIGluY2lkaWR1bnQgdXQgbGFib3JlIGV0IGRvbG9yZSBtYWduYSBhbGlxdWEu', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?post_type=testimonial&#038;p=724', '', 'closed', 'a:5:{s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:17:"_vc_post_settings";a:1:{i:0;s:30:"a:1:{s:10:"vc_grid_id";a:0:{}}";}s:14:"slide_template";a:1:{i:0;s:7:"default";}s:10:"_edit_lock";a:1:{i:0;s:12:"1448878577:1";}s:13:"_thumbnail_id";a:1:{i:0;s:4:"2081";}}' );

kt_other_post_type(729, 'testimonial', 0 ,'Mary Queen', 'TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdCwgc2VkIGRvIGVpdXNtb2QgdGVtcG9yIGluY2lkaWR1bnQgdXQgbGFib3JlIGV0IGRvbG9yZSBtYWduYSBhbGlxdWEu', 'http://dev02.ovicsoft.com/thang/kutetheme-wp/?post_type=testimonial&#038;p=729', '', 'closed', 'a:5:{s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:17:"_vc_post_settings";a:1:{i:0;s:30:"a:1:{s:10:"vc_grid_id";a:0:{}}";}s:14:"slide_template";a:1:{i:0;s:7:"default";}s:10:"_edit_lock";a:1:{i:0;s:12:"1448878908:1";}s:13:"_thumbnail_id";a:1:{i:0;s:4:"2080";}}' );

kt_other_post_type(1804, 'shop_order', 0 ,'Order &ndash; September 16, 2015 @ 01:10 AM', '', 'http://kutethemes.net/wordpress/kuteshop/option1/?post_type=shop_order&amp;p=1668', '', 'open', 'a:38:{s:17:"_vc_post_settings";a:1:{i:0;s:30:"a:1:{s:10:"vc_grid_id";a:0:{}}";}s:10:"_order_key";a:1:{i:0;s:22:"wc_order_55f8c173b116b";}s:15:"_order_currency";a:1:{i:0;s:3:"SGD";}s:19:"_prices_include_tax";a:1:{i:0;s:2:"no";}s:20:"_customer_ip_address";a:1:{i:0;s:13:"117.6.204.186";}s:20:"_customer_user_agent";a:1:{i:0;s:65:"Mozilla/5.0 (Windows NT 6.1; rv:40.0) Gecko/20100101 Firefox/40.0";}s:14:"_customer_user";a:1:{i:0;s:1:"1";}s:12:"_created_via";a:1:{i:0;s:8:"checkout";}s:14:"_order_version";a:1:{i:0;s:5:"2.4.6";}s:19:"_billing_first_name";a:1:{i:0;s:1:"h";}s:18:"_billing_last_name";a:1:{i:0;s:3:"dfg";}s:16:"_billing_company";a:1:{i:0;s:0:"";}s:14:"_billing_email";a:1:{i:0;s:20:"kutethemes@gmail.com";}s:14:"_billing_phone";a:1:{i:0;s:3:"123";}s:16:"_billing_country";a:1:{i:0;s:2:"VN";}s:18:"_billing_address_1";a:1:{i:0;s:5:"dfghj";}s:18:"_billing_address_2";a:1:{i:0;s:0:"";}s:13:"_billing_city";a:1:{i:0;s:4:"cvbn";}s:14:"_billing_state";a:1:{i:0;s:0:"";}s:17:"_billing_postcode";a:1:{i:0;s:3:"XCV";}s:20:"_shipping_first_name";a:1:{i:0;s:1:"h";}s:19:"_shipping_last_name";a:1:{i:0;s:3:"dfg";}s:17:"_shipping_company";a:1:{i:0;s:0:"";}s:17:"_shipping_country";a:1:{i:0;s:2:"VN";}s:19:"_shipping_address_1";a:1:{i:0;s:5:"dfghj";}s:19:"_shipping_address_2";a:1:{i:0;s:0:"";}s:14:"_shipping_city";a:1:{i:0;s:4:"cvbn";}s:15:"_shipping_state";a:1:{i:0;s:0:"";}s:18:"_shipping_postcode";a:1:{i:0;s:3:"XCV";}s:15:"_payment_method";a:1:{i:0;s:6:"cheque";}s:21:"_payment_method_title";a:1:{i:0;s:14:"Cheque Payment";}s:15:"_order_shipping";a:1:{i:0;s:0:"";}s:14:"_cart_discount";a:1:{i:0;s:1:"0";}s:18:"_cart_discount_tax";a:1:{i:0;s:1:"0";}s:10:"_order_tax";a:1:{i:0;s:1:"0";}s:19:"_order_shipping_tax";a:1:{i:0;s:1:"0";}s:12:"_order_total";a:1:{i:0;s:6:"137.00";}s:15:"_recorded_sales";a:1:{i:0;s:3:"yes";}}' );

kt_other_post_type(1806, 'shop_order', 0 ,'Order &ndash; September 21, 2015 @ 07:18 AM', '', 'http://kutethemes.net/wordpress/kuteshop/option1/?post_type=shop_order&amp;p=1707', '', 'open', 'a:38:{s:19:"_shipping_address_1";a:1:{i:0;s:5:"abcde";}s:17:"_shipping_company";a:1:{i:0;s:4:"Ovic";}s:17:"_shipping_country";a:1:{i:0;s:2:"VN";}s:19:"_shipping_last_name";a:1:{i:0;s:2:"Le";}s:20:"_shipping_first_name";a:1:{i:0;s:5:"Emily";}s:17:"_billing_postcode";a:1:{i:0;s:4:"0000";}s:14:"_billing_state";a:1:{i:0;s:0:"";}s:13:"_billing_city";a:1:{i:0;s:11:"Thai Nguyen";}s:18:"_billing_address_2";a:1:{i:0;s:0:"";}s:18:"_billing_address_1";a:1:{i:0;s:5:"abcde";}s:16:"_billing_country";a:1:{i:0;s:2:"VN";}s:14:"_billing_phone";a:1:{i:0;s:10:"3535425454";}s:14:"_billing_email";a:1:{i:0;s:18:"ltminh@ictu.edu.vn";}s:16:"_billing_company";a:1:{i:0;s:4:"Ovic";}s:18:"_billing_last_name";a:1:{i:0;s:2:"Le";}s:19:"_billing_first_name";a:1:{i:0;s:5:"Emily";}s:14:"_order_version";a:1:{i:0;s:5:"2.4.6";}s:12:"_created_via";a:1:{i:0;s:8:"checkout";}s:14:"_customer_user";a:1:{i:0;s:1:"2";}s:15:"_order_currency";a:1:{i:0;s:3:"SGD";}s:19:"_prices_include_tax";a:1:{i:0;s:2:"no";}s:20:"_customer_ip_address";a:1:{i:0;s:13:"117.6.204.186";}s:20:"_customer_user_agent";a:1:{i:0;s:108:"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36";}s:15:"_recorded_sales";a:1:{i:0;s:3:"yes";}s:19:"_shipping_address_2";a:1:{i:0;s:0:"";}s:14:"_shipping_city";a:1:{i:0;s:11:"Thai Nguyen";}s:15:"_shipping_state";a:1:{i:0;s:0:"";}s:18:"_shipping_postcode";a:1:{i:0;s:4:"0000";}s:15:"_payment_method";a:1:{i:0;s:6:"cheque";}s:21:"_payment_method_title";a:1:{i:0;s:14:"Cheque Payment";}s:15:"_order_shipping";a:1:{i:0;s:0:"";}s:14:"_cart_discount";a:1:{i:0;s:1:"0";}s:18:"_cart_discount_tax";a:1:{i:0;s:1:"0";}s:10:"_order_tax";a:1:{i:0;s:1:"0";}s:19:"_order_shipping_tax";a:1:{i:0;s:1:"0";}s:12:"_order_total";a:1:{i:0;s:7:"5151.00";}s:10:"_order_key";a:1:{i:0;s:22:"wc_order_55ffaf30a9afd";}s:17:"_vc_post_settings";a:1:{i:0;s:30:"a:1:{s:10:"vc_grid_id";a:0:{}}";}}' );

kt_other_post_type(2082, 'testimonial', 0 ,'Adam Smith', 'TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdCwgc2VkIGRvIGVpdXNtb2QgdGVtcG9yIGluY2lkaWR1bnQgdXQgbGFib3JlIGV0IGRvbG9yZSBtYWduYSBhbGlxdWEu', 'http://kutethemes.net/wordpress/kuteshop/option12/?post_type=testimonial&#038;p=2082', '', 'closed', 'a:5:{s:10:"_edit_last";a:1:{i:0;s:1:"1";}s:10:"_edit_lock";a:1:{i:0;s:12:"1448878560:1";}s:13:"_thumbnail_id";a:1:{i:0;s:4:"2079";}s:17:"_vc_post_settings";a:1:{i:0;s:30:"a:1:{s:10:"vc_grid_id";a:0:{}}";}s:14:"slide_template";a:1:{i:0;s:7:"default";}}' );