import app from "flarum/admin/app";

app.initializers.add("nearata-sensitive-content", () => {
  app.extensionData.for("nearata-sensitive-content").registerPermission(
    {
      icon: "fas fa-eye",
      label: app.translator.trans(
        "nearata-sensitive-content.admin.permissions.view.label"
      ),
      permission: "nearata-sensitive-content.view",
    },
    "view"
  );
});
